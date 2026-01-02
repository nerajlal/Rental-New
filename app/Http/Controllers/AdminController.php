<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function sites()
    {
        // Optional: Make this dynamic too if desired, but sticking to pending first as requested
        return view('admin.sites');
    }

    public function pending()
    {
        $pendingUsers = \App\Models\User::where('status', 0)->latest()->get();
        return view('admin.pending', compact('pendingUsers'));
    }

    public function approve($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->status = 1; // Active
        $user->save();

        return redirect()->back()->with('success', 'Shop approved successfully.');
    }

    public function reject($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete(); // Or set status 2 for suspended

        return redirect()->back()->with('success', 'Shop rejected and removed.');
    }

    public function tenants()
    {
        return view('admin.tenants');
    }

    public function billing()
    {
        return view('admin.billing');
    }

    public function report()
    {
        return view('admin.report');
    }

    public function support()
    {
        return view('admin.support');
    }
}
