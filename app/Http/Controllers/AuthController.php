<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/appointment/index'); // Change the redirection as needed
        }

        return redirect()->route('login')->with('error', 'Invalid login credentials');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'date_of_birth' => 'required|date',
            'contact_number' => [
                'required',
                'regex:/^\d{4} \d{4} \d{3}$/',
                Rule::unique('users', 'contact_number')->ignore(Auth::id()), // Ignore the current user's contact number
            ],
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:4|confirmed',
        ]);
        
     // Remove spaces from the contact number before storing
     $contactNumber = str_replace(' ', '', $request->input('contact_number'));

     // Combine last_name and first_name to create a simple name for the user
     $name = $request->input('last_name') . ' ' . $request->input('first_name');
        // Remove spaces from the contact number before storing
        $contactNumber = str_replace(' ', '', $request->input('contact_number'));
    
        User::create([
            'name' => $name,
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'contact_number' => $contactNumber,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
        
    }
}
