<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SeatReservation;
class SeatReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservations = [
            [
                'schedule_id' => 1,
                'seat_number' => 1,
                'customer_name' => 'John Doe',
                'dni' => '12345678',
                'phone' => '999999999',
                'user_id' => 1
            ],
            [
                'schedule_id' => 1,
                'seat_number' => 2,
                'customer_name' => 'Jane Smith',
                'dni' => '87654321',
                'phone' => '988888888',
                'user_id' => 1
            ],
        ];

        foreach ($reservations as $res) {
            SeatReservation::create($res);
        }
    }
}
