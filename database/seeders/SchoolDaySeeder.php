<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolDay;
use Carbon\CarbonPeriod;

class SchoolDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate a full academic year of days
        $period = CarbonPeriod::create(now()->startOfYear(), now()->endOfYear());

        foreach ($period as $date) {
            $isWeekend = $date->isWeekend();

            SchoolDay::create([
                'date' => $date->format('Y-m-d'),
                'is_holiday' => $isWeekend,
                'event_name' => $isWeekend ? 'Weekend' : null,
                'attendance_count' => $isWeekend ? 0 : random_int(200, 800),
            ]);
        }
    }
}
