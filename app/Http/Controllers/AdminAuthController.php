<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            // Status Checks
            if ($user->status == 0) {
                Auth::logout();
                $request->session()->invalidate();
                return back()->withErrors(['email' => 'Your site is under admin approval. Please wait for some time.'])->onlyInput('email');
            }

            if ($user->status == 2) {
                Auth::logout();
                $request->session()->invalidate();
                return back()->withErrors(['email' => 'Your account is deactivated by the admin. Please contact the support.'])->onlyInput('email');
            }

            // Role Redirection
            if ($user->type === 'Shop') {
                return redirect()->route('shop.dashboard');
            }

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
