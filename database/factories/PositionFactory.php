<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->jobTitle,
            'department_id' => Department::query()->inRandomOrder()->first()->id,
            'salary_range_min' => $this->faker->numberBetween(30000, 60000),
            'salary_range_max' => $this->faker->numberBetween(60001, 120000),
        ];
    }
}
