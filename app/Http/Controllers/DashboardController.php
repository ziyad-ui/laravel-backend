<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\SchoolDay;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function enrollmentTrends()
    {
        // SQLite (used in this project) does not support DATE_FORMAT,
        // so we use strftime to group enrollments by month.
        $data = Student::selectRaw("strftime('%Y-%m-01', enrolled_at) as month, COUNT(*) as total")
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return response()->json($data);
    }

    public function courseDistribution()
    {
        $data = Course::select('name')
            ->withCount('students')
            ->orderBy('students_count', 'desc')
            ->get()
            ->map(function (Course $course) {
                return [
                    'course' => $course->name,
                    'total' => $course->students_count,
                ];
            });

        return response()->json($data);
    }

    public function attendance()
    {
        $data = SchoolDay::where('is_holiday', false)
            ->orderBy('date')
            ->get(['date', 'attendance_count']);

        return response()->json($data);
    }
}
