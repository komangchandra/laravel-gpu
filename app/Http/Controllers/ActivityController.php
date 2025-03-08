<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Unit;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::with(['unit'])->get();
        return view('dashboard.activities.index', compact('activities'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('dashboard.activities.create', compact('units'));
    }

    public function store(Request $request) {}
}
