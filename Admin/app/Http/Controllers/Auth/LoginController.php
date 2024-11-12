<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{

    public function showLoginPage()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'ic_number' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'ic_number' => $request->ic_number,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Login successful, redirect to the home page
            return redirect()->intended('index');
        } else {
            // Login failed, redirect back with an error message
            return redirect()->back()->withErrors([
                'login_error' => 'Invalid IC number or password.',
            ]);
        }
    }

    public function home()
    {
        return view('index'); // or redirect to the main dashboard view
    }
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login'); // Redirects to the login page
    }

}
