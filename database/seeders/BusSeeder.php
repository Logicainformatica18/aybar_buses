<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;
class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buses = [
            ['description' => 'Bus A', 'seat_count' => 30],
            ['description' => 'Bus B', 'seat_count' => 40],
            ['description' => 'Bus C', 'seat_count' => 35],
            ['description' => 'Bus D', 'seat_count' => 28],
            ['description' => 'Bus E', 'seat_count' => 45],
        ];

        foreach ($buses as $bus) {
            Bus::create($bus);
        }
    }
}
