<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle the registration of a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'ic_number' => 'required|numeric|unique:users,ic_number',
            'mobilenumber' => 'required|string|max:15',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string',
            'address' => 'nullable|string',
            'nationality' => 'nullable|string',
            'fname' => 'nullable|string',
            'fcontact' => 'nullable|string',
            'foccupation' => 'nullable|string',
            'mname' => 'nullable|string',
            'mcontact' => 'nullable|string',
            'moccupation' => 'nullable|string',
            'gname' => 'nullable|string',
            'gcontact' => 'nullable|string',
            'goccupation' => 'nullable|string',
            'blood_type' => 'nullable|string',
            'allergies' => 'nullable|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'ic_number' => $request->ic_number,
            'mobilenumber' => $request->mobilenumber,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'nationality' => $request->nationality ?? 'Malaysian',
            'fname' => $request->fname,
            'fcontact' => $request->fcontact,
            'foccupation' => $request->foccupation,
            'mname' => $request->mname,
            'mcontact' => $request->mcontact,
            'moccupation' => $request->moccupation,
            'gname' => $request->gname ?? 'Not Applicable',
            'gcontact' => $request->gcontact ?? 'Not Applicable',
            'goccupation' => $request->goccupation ?? 'Not Applicable',
            'blood_type' => $request->blood_type,
            'allergies' => $request->allergies ?? 'None',
            'password' => Hash::make($request->password),
            'role' => 'Student', // Default role, modify if necessary
            'avatar' => 'default-avatar.png', // You can use a default avatar if needed
        ]);

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}
