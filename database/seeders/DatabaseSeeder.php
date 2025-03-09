<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class,
            PositionSeeder::class,
            EmployeeSeeder::class,
            AttendanceSeeder::class,
            PayrollSeeder::class,
        ]);

        // Create Departments
        // Department::factory()->count(5)->create();

        // Create Positions
        // Position::factory()->count(10)->create();

        // Create Employees
        // Employee::factory()->count(50)->create();

        // Create Payrolls
        // Payroll::factory()->count(50)->create();

        // Create Attendances
        // Attendance::factory()->count(100)->create();
    }
}
