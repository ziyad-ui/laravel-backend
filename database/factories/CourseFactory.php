<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => strtoupper($this->faker->bothify('CS###')),
            'name' => $this->faker->words(3, true),
            'department' => $this->faker->randomElement(['Computer Science', 'Information Technology', 'Engineering', 'Business']),
            'units' => $this->faker->numberBetween(2, 5),
        ];
    }
}
