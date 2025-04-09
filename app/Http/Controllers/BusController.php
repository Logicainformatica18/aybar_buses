<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $Bus = Bus::orderBy('id', 'DESC')->get();
        return view("Bus.Bus", compact("Bus"));
    }

    public function create()
    {
        $Bus = Bus::orderBy('id', 'DESC')->get();
        return view("Bus.Bustable", compact("Bus"));
    }

    public function store(Request $request)
    {
        try {
            $Bus = new Bus;
            $Bus->description = $request->description;
            $Bus->seat_count = $request->seat_count;
            $Bus->save();
            return $this->create();
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }


    public function edit(Request $request)
    {
        return Bus::find($request->id);
    }

    public function update(Request $request)
    {
        $Bus = Bus::find($request->id);
        $Bus->description = $request->description;
        $Bus->seat_count = $request->seat_count;
        $Bus->save();

        return $this->create();
    }

    public function destroy(Request $request)
    {
        $Bus = Bus::find($request->id);
        $Bus->delete();

        return $this->create();
    }
}
