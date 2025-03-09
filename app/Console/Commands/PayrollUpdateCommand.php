<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PayrollUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:payroll:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update payroll records based on attendance data';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Starting payroll update process...');

        // Process employees in chunks to optimize memory usage
        DB::table('employees')->orderBy('id')->chunk(100, function ($employees) {
            foreach ($employees as $employee) {
                $this->info("Processing payroll for employee: {$employee->id} ({$employee->first_name} {$employee->last_name})");

                // Get attendance records for the employee
                $attendanceRecords = DB::table('attendances')
                    ->where('employee_id', $employee->id)
                    ->selectRaw('EXTRACT(YEAR FROM date) as year, EXTRACT(MONTH FROM date) as month, MIN(date) as first_attendance, MAX(date) as last_attendance, COUNT(*) as total_days_worked')
                    ->groupBy('year', 'month')
                    ->orderBy('year')
                    ->orderBy('month')
                    ->get();

                foreach ($attendanceRecords as $attendanceData) {
                    if (!$attendanceData->first_attendance) {
                        $this->warn("No attendance records found for employee: {$employee->id}");
                        continue;
                    }

                    $this->info("Attendance range: {$attendanceData->first_attendance} to {$attendanceData->last_attendance}");
                    $this->info("Total days worked: {$attendanceData->total_days_worked}");

                    $salary = $employee->salary / 12;

                    // Retrieve salary from preloaded data
                    $totalWorkingDays = now()->daysInMonth; // Get the number of days in the current month
                    $proportionalSalary = ($attendanceData->total_days_worked / $totalWorkingDays) * $salary;

                    $bonusPercentage = rand(2, 6) / 100;
                    $deductionsPercentage = rand(1, 4) / 100;

                    $bonus = $salary * $bonusPercentage;
                    $deductions = $salary * $deductionsPercentage;

                    $this->info("Proportional salary: {$proportionalSalary}");

                    $endOfMonth = Carbon::parse($attendanceData->first_attendance);

                    // Update payroll record
                    DB::table('payrolls')->updateOrInsert(
                        ['employee_id' => $employee->id, 'pay_date' => $endOfMonth->copy()->endOfMonth()],
                        [
                            'base_salary' => $salary,
                            'proportional_salary' => $proportionalSalary,
                            'bonus' => $bonus,
                            'deductions' => $deductions,
                            'net_salary' => $proportionalSalary + $bonus - $deductions,
                            'pay_date' => now()->format('Y-m-d'),
                        ]
                    );

                    $this->info("Payroll updated for employee: {$employee->id}");
                }
            }
        });

        $this->info('Payroll update process completed successfully!');

        return self::SUCCESS;
    }
}
