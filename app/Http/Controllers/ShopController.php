<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('admin-shop.dashboard');
    }

    public function orders()
    {
        return view('admin-shop.orders');
    }

    public function products()
    {
        return view('admin-shop.products');
    }

    public function customers()
    {
        return view('admin-shop.customers');
    }

    public function content()
    {
        return view('admin-shop.content');
    }

    public function analytics()
    {
        return view('admin-shop.analytics');
    }

    public function marketing()
    {
        return view('admin-shop.marketing');
    }

    public function discounts()
    {
        return view('admin-shop.discounts');
    }

    public function onlineStore()
    {
        return view('admin-shop.online-store');
    }

    public function productsCreate()
    {
        return view('admin-shop.products-create');
    }

    public function ordersView($id)
    {
        return view('admin-shop.orders-view');
    }

    public function calendar()
    {
        return view('admin-shop.calendar');
    }

    public function returns()
    {
        return view('admin-shop.returns');
    }

    public function deposits()
    {
        return view('admin-shop.deposits');
    }

    public function maintenance()
    {
        return view('admin-shop.maintenance');
    }
}
