<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return new TransactionResource("Success", "List of transaksi", $transactions);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'datetime' => 'required',
            'hm' => 'required',
            'vol' => 'required',
            'initial_flow' => 'required',
            'final_flow' => 'required',
            'driver' => 'required',
            'location' => 'required',
            'username' => 'required',
            'unit' => 'required',
            'no_lambung' => 'required',
            'owner' => 'required',
            'fuel_truck' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $transaction = Transaction::create([
            'datetime' => $request->datetime,
            'hm' => $request->hm,
            'vol' => $request->vol,
            'initial_flow' => $request->initial_flow,
            'final_flow' => $request->final_flow,
            'driver' => $request->driver,
            'location' => $request->location,
            'username' => $request->username,
            'unit' => $request->unit,
            'no_lambung' => $request->no_lambung,
            'owner' => $request->owner,
            'fuel_truck' => $request->fuel_truck,
        ]);

        return new TransactionResource('Success', 'Transaksi berhasil', $transaction);
    }
}
