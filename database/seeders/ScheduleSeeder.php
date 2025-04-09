<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;
class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            ['project_id' => 1, 'bus_id' => 1, 'date' => '2025-05-01', 'time' => '08:00:00', 'status' => 'active'],
            ['project_id' => 2, 'bus_id' => 2, 'date' => '2025-05-02', 'time' => '09:00:00', 'status' => 'active'],
            ['project_id' => 3, 'bus_id' => 3, 'date' => '2025-05-03', 'time' => '10:00:00', 'status' => 'active'],
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
