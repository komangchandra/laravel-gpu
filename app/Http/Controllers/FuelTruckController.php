<?php

namespace App\Http\Controllers;

use App\Models\FuelTruck;
use Illuminate\Http\Request;

class FuelTruckController extends Controller
{
    public function index()
    {
        $fuel_trucks = FuelTruck::all();

        return view('dashboard.fuels.index', compact('fuel_trucks'));
    }

    public function create()
    {
        return view('dashboard.fuels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fuel_truck_id' => 'required',
            'fuel_truck_name' => 'required',
            'volume' => 'required',
        ]);

        FuelTruck::create([
            'fuel_truck_id' => strtoupper($request->fuel_truck_id),
            'fuel_truck_name' => $request->fuel_truck_name,
            'volume' => $request->volume,
            'total_flow' => 100,
        ]);

        return redirect()->route('fuels.index')->with('success', 'Data berhasil disimpan');
    }
}
