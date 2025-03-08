<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        // dd($units);
        return view('dashboard.units.index', compact('units'));
    }

    public function create()
    {
        return view('dashboard.units.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_id' => 'required',
            'unit_name' => 'required',
            'owner' => 'required',
            'capacity' => 'required',
        ]);

        Unit::create([
            'unit_id' => $request->unit_id,
            'unit_name' => $request->unit_name,
            'owner' => $request->owner,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('units.index')->with('success', 'Data berhasil disimpan');
    }
}
