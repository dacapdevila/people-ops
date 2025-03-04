<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'position_id' => Position::factory(),
            'department_id' => Department::factory(),
            'hire_date' => $this->faker->date(),
            'salary' => $this->faker->numberBetween(35000, 100000),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
