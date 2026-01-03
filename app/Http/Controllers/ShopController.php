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

    public function navigation()
    {
        // Get or create default navigation menus
        $mainMenu = \DB::table('navigation_menus')
            ->where('user_id', auth()->id())
            ->where('type', 'main')
            ->first();
            
        $footerMenu = \DB::table('navigation_menus')
            ->where('user_id', auth()->id())
            ->where('type', 'footer')
            ->first();
            
        return view('admin-shop.navigation', [
            'mainMenu' => $mainMenu ? json_decode($mainMenu->items, true) : [],
            'footerMenu' => $footerMenu ? json_decode($footerMenu->items, true) : []
        ]);
    }

    public function saveNavigation(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'type' => 'required|in:main,footer',
            'items' => 'required|json'
        ]);

        \DB::table('navigation_menus')->updateOrInsert(
            [
                'user_id' => auth()->id(),
                'type' => $request->type
            ],
            [
                'items' => $request->items,
                'updated_at' => now()
            ]
        );

        return response()->json(['success' => true, 'message' => 'Navigation saved successfully']);
    }
}
