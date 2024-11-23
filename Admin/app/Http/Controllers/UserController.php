<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function showUsers()
{
    $allUsers = User::all(); // Fetch all users
    return view('Teacher-Class-Division', compact('allUsers')); // Pass data to the correct view
}

}
