<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'student_number',
        'first_name',
        'last_name',
        'gender',
        'department',
        'course_id',
        'enrolled_at',
        'age',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
