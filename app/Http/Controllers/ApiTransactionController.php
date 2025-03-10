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
            'time' => 'required|string',
            'hm' => 'required|string',
            'vol' => 'required|string',
            'initial_flow' => 'required|string',
            'final_flow' => 'required|string',
            'driver' => 'required|string',
            'location' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'unit_id' => 'required|exists:units,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $transaction = Transaction::create([
            'time' => $request->time,
            'hm' => $request->hm,
            'vol' => $request->vol,
            'initial_flow' => $request->initial_flow,
            'final_flow' => $request->final_flow,
            'driver' => $request->driver,
            'location' => $request->location,
            'user_id' => $request->user_id,
            'unit_id' => $request->unit_id,
        ]);

        return new TransactionResource('Success', 'Transaksi berhasil', $transaction);
    }
}
