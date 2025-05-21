<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the credentials
        $credentials = $request->only('email', 'password');
        $user = \App\Models\User::where('email', $credentials['email'])->first();

        if ($user && \Hash::check($credentials['password'], $user->password)) {
            // Log in the user
            auth()->login($user, $request->has('remember')); // Check if "remember me" is checked
            return redirect()->intended('home'); // Redirect to the intended page
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }

    public function register(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);

        // Log in the newly registered user
        auth()->login($user);

        // Redirect to the intended page or home
        return redirect()->intended('home');
    }

    public function logout()
    {
        auth()->logout(); // Log out the user
        return redirect('/login'); // Redirect to the login page
    }


    public function index2()
    {
        return view('register');
    }
}
