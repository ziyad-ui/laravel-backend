<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['code' => 'IT101', 'name' => 'Introduction to Information Technology', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT102', 'name' => 'Programming Fundamentals', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT201', 'name' => 'Data Structures and Algorithms', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT202', 'name' => 'Database Systems', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT203', 'name' => 'Computer Networks', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT204', 'name' => 'Operating Systems', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT205', 'name' => 'Web Development', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT301', 'name' => 'Software Engineering', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT302', 'name' => 'Information Security', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT303', 'name' => 'Human Computer Interaction', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT304', 'name' => 'Systems Analysis and Design', 'department' => 'Information Technology', 'units' => 3],
            ['code' => 'IT305', 'name' => 'Mobile Application Development', 'department' => 'Information Technology', 'units' => 3],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
