<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'date' => $this->faker->date(),
            'check_in' => $this->faker->time('H:i:s'),
            'check_out' => $this->faker->time('H:i:s'),
            'status' => $this->faker->randomElement(['present', 'late', 'absent']),
        ];
    }
}
