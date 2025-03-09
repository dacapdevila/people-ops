<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Payroll;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Payroll>
 */
class PayrollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::query()->inRandomOrder()->first()->id,
            'base_salary' => $this->faker->numberBetween(35000, 100000),
            'bonus' => $this->faker->numberBetween(1000, 10000),
            'deductions' => $this->faker->numberBetween(500, 5000),
            'net_salary' => function (array $attributes) {
                return $attributes['base_salary'] + $attributes['bonus'] - $attributes['deductions'];
            },
            'pay_date' => $this->faker->date(),
        ];
    }
}
