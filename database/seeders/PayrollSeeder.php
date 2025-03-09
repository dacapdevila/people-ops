<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payrolls = [];

        $employees = DB::table('employees')
            ->select('id')
            ->get();

        foreach ($employees as $employee) {

            $attendance = DB::table('attendances')
                ->where('employee_id', $employee->id)
                ->selectRaw('MIN(date) as first_day, MAX(date) as last_day')
                ->first();


            if (!$attendance->first_day || !$attendance->last_day) {
                continue;
            }

            $firstWorkDate = Carbon::parse($attendance->first_day);
            $lastWorkDate = Carbon::parse($attendance->last_day);

            for ($date = $firstWorkDate->copy()->startOfMonth(); $date <= $lastWorkDate->copy()->endOfMonth(); $date->addMonth()) {
                $payrolls[] = [
                    'employee_id' => $employee->id,
                    'base_salary' => 0,
                    'proportional_salary' => 0,
                    'bonus' => 0,
                    'deductions' => 0,
                    'net_salary' => 0,
                    'pay_date' => $date->copy()->endOfMonth()->format('Y-m-d'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('payrolls')->insert($payrolls);
    }
}
