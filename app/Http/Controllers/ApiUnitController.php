<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class ApiUnitController extends Controller
{
    public function show($unit_id)
    {
        $unit = Unit::where('unit_id', $unit_id)->first();

        if (!$unit) {
            return response()->json([
                'message' => 'Unit tidak ditemukan'
            ], 404);
        }

        return response()->json($unit);
    }
}
