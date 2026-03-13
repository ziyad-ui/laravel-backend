<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        if ($courses->isEmpty()) {
            $courses = Course::factory()->count(20)->create();
        }

        $courseIds = $courses->pluck('id')->all();

        Student::factory()
            ->count(500)
            ->make()
            ->each(function (Student $student) use ($courseIds) {
                $student->course_id = $courseIds[array_rand($courseIds)];
                $student->save();
            });
    }
}
