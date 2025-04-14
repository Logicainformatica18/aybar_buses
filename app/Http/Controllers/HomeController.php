<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\SeatReservation;
use App\Models\Schedule;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $SeatReservation = SeatReservation::with('schedule.project', 'schedule.bus')->orderBy('id', 'DESC')->get();
        $schedules = Schedule::with(['project', 'bus'])
        ->get()
        ->map(function ($schedule) {
            $schedule->reservedSeats = SeatReservation::where('schedule_id', $schedule->id)->pluck('seat_number')->toArray();
            return $schedule;
        });

        return view("production.2", compact("SeatReservation","schedules"));
    }

    public function sistema()
    {
       $users= Auth::user();


   //   return view('sistema',compact("users"));
    }
}
