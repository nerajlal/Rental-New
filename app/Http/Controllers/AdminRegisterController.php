<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Auth::login($user); // Optional: Login immediately or force login via form? 
        // User asked to "stay in that landing page" and "popup". 
        // Sticking to auto-login is usually better UX, but let's redirect to home.
        
        Auth::login($user);

        return redirect()->route('home')->with('register_success', 'Your account has been created successfully!');
    }
}
