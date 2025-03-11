<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', false)->get();
        // dd($users);

        return view('dashboard.users.index', compact('users'));
    }
}
