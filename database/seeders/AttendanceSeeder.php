<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class AttendanceSeeder extends Seeder
{
    private const BATCH_SIZE = 500;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $employees = DB::table('employees')->select('id', 'hire_date')->get();

        $batch = [];

        foreach ($employees as $employee) {
            $hireDate = Carbon::parse($employee->hire_date);
            $endDate = Carbon::now()->subDay();
            $totalDays = min($hireDate->diffInDays($endDate), 90);

            for ($i = 0; $i < $totalDays; $i++) {
                $date = $hireDate->copy()->addDays($i);

                if ($date->isWeekend()) {
                    continue;
                }

                $checkIn = Carbon::parse($date->format('Y-m-d') . ' ' . $faker->dateTimeBetween('08:55:00', '09:10:00')->format('H:i:s'));

                $checkOut = Carbon::parse($date->format('Y-m-d') . ' ' . $faker->dateTimeBetween('17:00:00', '19:00:00')->format('H:i:s'));

                $status = $faker->randomElement([
                    'office',
                    'remote',
                    'absent',
                ]);

                $batch[] = [
                    'employee_id' => $employee->id,
                    'date' => $date->format('Y-m-d'),
                    'check_in' => $status === 'absent' ? null : $checkIn->format('H:i:s'),
                    'check_out' => $status === 'absent' ? null : $checkOut->format('H:i:s'),
                    'status' => $status,
                    'created_at' => now(),
                    'updated_at' => now()
                ];

                if (count($batch) >= self::BATCH_SIZE) {
                    DB::table('attendances')->insert($batch);
                    $batch = [];
                    gc_collect_cycles();
                }
            }
        }

        if (!empty($batch)) {
            DB::table('attendances')->insert($batch);
            gc_collect_cycles();
        }
    }
}
