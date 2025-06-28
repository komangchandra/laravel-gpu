<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transactions = Transaction::all();
        $totalVol = Transaction::sum('vol');

        $volByLocation = Transaction::select('location')
            ->selectRaw('SUM(vol) as total_vol')
            ->groupBy('location')
            ->get();

        $volByFuelTruck = Transaction::select('fuel_truck')
            ->selectRaw('SUM(vol) as total_vol_by_ft')
            ->groupBy('fuel_truck')
            ->get();

        // dd($volByLocation);
        return view('dashboard.index', compact('transactions', 'totalVol', 'volByLocation', 'volByFuelTruck'));
    }
}
