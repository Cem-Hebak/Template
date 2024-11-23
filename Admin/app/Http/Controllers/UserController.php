<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers()
    {
        // Retrieve all users
        $users = User::all();

        // Pass the data to a view
        return view('users.index', compact('users'));
    }
}
