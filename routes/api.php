<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/courses', [CourseController::class, 'index']);

    Route::get('/dashboard/enrollment-trends', [DashboardController::class, 'enrollmentTrends']);
    Route::get('/dashboard/course-distribution', [DashboardController::class, 'courseDistribution']);
    Route::get('/dashboard/attendance', [DashboardController::class, 'attendance']);
});

