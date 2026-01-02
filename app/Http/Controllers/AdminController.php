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
        return view('admin.sites');
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
