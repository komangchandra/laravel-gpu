<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        // dd($transactions);
        return view('dashboard.transactions.index', compact('transactions'));
    }

    // public function 
}
