<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            [
                'name' => 'Human Resources',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Finance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sales',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'IT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer Support',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Legal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Operations',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Research and Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Procurement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Public Relations',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Security',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quality Assurance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Logistics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product Management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Business Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Compliance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Training and Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Corporate Strategy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facilities Management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('departments')->insert($names);
    }
}
