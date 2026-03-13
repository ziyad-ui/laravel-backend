<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_number' => strtoupper($this->faker->bothify('STU########')),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'department' => $this->faker->randomElement(['Computer Science', 'Information Technology', 'Engineering', 'Business']),
            'course_id' => null, // set in seeder to ensure valid relations
            'enrolled_at' => $this->faker->dateTimeBetween('-3 years', 'now')->format('Y-m-d'),
            'age' => $this->faker->numberBetween(17, 30),
        ];
    }
}
