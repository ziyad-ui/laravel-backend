<?php

namespace Database\Factories;

use App\Models\SchoolDay;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SchoolDay>
 */
class SchoolDayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->unique()->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d'),
            'is_holiday' => false,
            'event_name' => null,
            'attendance_count' => $this->faker->numberBetween(200, 800),
        ];
    }
}
