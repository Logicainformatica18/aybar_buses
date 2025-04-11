<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Project;
use App\Models\Bus;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $Schedule = Schedule::with(['project', 'bus'])->orderBy('id', 'DESC')->get();
        $Projects = Project::all();
        $Buses = Bus::all();
        return view("Schedule.Schedule", compact("Schedule","Projects","Buses"));
    }

    public function create()
    {
        $Schedule = Schedule::with(['project', 'bus'])->orderBy('id', 'DESC')->get();
        $Projects = Project::orderBy('id', 'DESC')->get();
        $Buses = Bus::orderBy('id', 'DESC')->get();

        return view("Schedule.Scheduletable", compact("Schedule", "Projects", "Buses"));
    }

    public function store(Request $request)
    {
        $Schedule = new Schedule;
        $Schedule->project_id = $request->project_id;
        $Schedule->bus_id = $request->bus_id;
        $Schedule->date = $request->date;
        $Schedule->time = $request->time;
        $Schedule->status = $request->status ?? 'active';
        $Schedule->save();

        return $this->create();
    }

    public function edit(Request $request)
    {
        return Schedule::find($request->id);
    }

    public function update(Request $request)
    {
        $Schedule = Schedule::find($request->id);
        $Schedule->project_id = $request->project_id;
        $Schedule->bus_id = $request->bus_id;
        $Schedule->date = $request->date;
        $Schedule->time = $request->time;
        $Schedule->status = $request->status ?? 'active';
        $Schedule->save();

        return $this->create();
    }

    public function destroy(Request $request)
    {
        $Schedule = Schedule::find($request->id);
        $Schedule->delete();

        return $this->create();
    }
    public function report(Request $request){
        $Schedule = Schedule::with(['seatReservations','project', 'bus'])->where('schedules.id',"=",$request->schedule_id)->orderBy('id', 'DESC')->get();
        $Projects = Project::all();
        $Buses = Bus::all();
        return view("Report.Report", compact("Schedule","Projects","Buses"));
    }
}
