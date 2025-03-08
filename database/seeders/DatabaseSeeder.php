<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Position;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Department Seed
        $this->call(DepartmentSeeder::class);

        // Position Seed
        $this->call(PositionSeeder::class);

        //

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
