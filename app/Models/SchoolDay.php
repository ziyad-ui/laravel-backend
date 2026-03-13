<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolDay extends Model
{
    /** @use HasFactory<\Database\Factories\SchoolDayFactory> */
    use HasFactory;

    protected $fillable = [
        'date',
        'is_holiday',
        'event_name',
        'attendance_count',
    ];
}
