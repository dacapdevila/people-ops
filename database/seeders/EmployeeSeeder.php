<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $departments = DB::table('departments')->get();

        $positions = DB::table('positions')->get();

        $employees = [];

        foreach ($departments as $department) {
            for ($i = 1; $i <= 10; $i++) {
                $departmentPositions = $positions->where('department_id', $department->id);

                if ($departmentPositions->isEmpty()) {
                    continue;
                }

                $position = $departmentPositions->random();

                $employees[] = [
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->unique()->safeEmail,
                    'phone' => $faker->phoneNumber,
                    'hire_date' => $faker->date(),
                    'status' => $faker->randomElement(['active', 'inactive']),
                    'salary' => $faker->numberBetween($position->salary_range_min, $position->salary_range_max),
                    'department_id' => $department->id,
                    'position_id' => $position->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
        }

        DB::table('employees')->insert($employees);
    }
}
