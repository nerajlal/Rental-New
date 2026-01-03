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
        $settings = \App\Models\StoreSettings::firstOrCreate(
            ['user_id' => auth()->id()],
            [
                'subdomain' => null,
                'homepage_title' => 'Premium Jewelry on Rent | Exquisite Bridal & Party Jewelry',
                'homepage_description' => 'Rent exquisite jewelry for weddings, parties, and special occasions. Premium bridal sets, diamond bangles, and traditional ornaments at affordable prices.',
            ]
        );
        
        return view('admin-shop.online-store', compact('settings'));
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

    public function saveStoreSettings(Request $request)
    {
        $validated = $request->validate([
            'homepage_title' => 'nullable|string|max:255',
            'homepage_description' => 'nullable|string|max:500',
            'google_analytics_id' => 'nullable|string|max:50',
            'facebook_pixel_id' => 'nullable|string|max:50',
            'password_protected' => 'boolean',
            'allow_search_indexing' => 'boolean',
        ]);

        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        
        if ($settings) {
            $settings->update($validated);
        }

        return response()->json(['success' => true, 'message' => 'Store settings saved successfully']);
    }

    public function updateSubdomain(Request $request)
    {
        $validated = $request->validate([
            'subdomain' => 'required|string|alpha_dash|max:50|unique:store_settings,subdomain,' . auth()->id() . ',user_id'
        ]);

        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        
        if ($settings) {
            $settings->update(['subdomain' => strtolower($validated['subdomain'])]);
            return response()->json([
                'success' => true, 
                'message' => 'Subdomain updated successfully',
                'full_subdomain' => $settings->full_subdomain
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Settings not found'], 404);
    }

    public function previewStore()
    {
        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        
        if (!$settings) {
            return redirect()->route('shop.online-store')->with('error', 'Please configure your store settings first.');
        }

        // Get navigation menus
        $mainMenu = \DB::table('navigation_menus')
            ->where('user_id', auth()->id())
            ->where('type', 'main')
            ->first();

        $mainMenuItems = $mainMenu ? json_decode($mainMenu->items, true) : [];

        return view('admin-shop.preview-store', compact('settings', 'mainMenuItems'));
    }

    public function themes()
    {
        $themes = [
            ['name' => 'jewelry-luxe', 'title' => 'Jewelry Luxe', 'description' => 'Premium jewelry rental theme'],
            ['name' => 'minimal-elegance', 'title' => 'Minimal Elegance', 'description' => 'Clean and sophisticated'],
            ['name' => 'royal-collection', 'title' => 'Royal Collection', 'description' => 'Traditional and ornate'],
        ];
        
        $currentTheme = \App\Models\ThemeCustomization::where('user_id', auth()->id())->first();
        
        return view('admin-shop.themes', compact('themes', 'currentTheme'));
    }

    public function customizeTheme($themeName)
    {
        // Load or create customization
        $customization = \App\Models\ThemeCustomization::firstOrCreate(
            ['user_id' => auth()->id()],
            ['theme_name' => $themeName]
        );
        
        // Load theme config
        $configPath = resource_path("views/admin-shop/themes/{$themeName}/config.json");
        $config = json_decode(file_get_contents($configPath), true);
        
        // Get menu items
        $mainMenu = \DB::table('navigation_menus')
            ->where('user_id', auth()->id())
            ->where('type', 'main')
            ->first();
        $menuItems = $mainMenu ? json_decode($mainMenu->items, true) : [];
        
        // Get store settings
        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        
        return view('admin-shop.theme-customize', compact('customization', 'config', 'themeName', 'menuItems', 'settings'));
    }

    public function saveThemeCustomization(Request $request)
    {
        $customization = \App\Models\ThemeCustomization::where('user_id', auth()->id())->first();
        
        if (!$customization) {
            return response()->json(['success' => false, 'message' => 'Customization not found'], 404);
        }
        
        $sections = json_decode($request->sections, true);
        $customization->update(['sections' => $sections]);
        
        return response()->json(['success' => true, 'message' => 'Customization saved successfully']);
    }

    public function publishTheme(Request $request)
    {
        $customization = \App\Models\ThemeCustomization::where('user_id', auth()->id())->first();
        
        if (!$customization) {
            return response()->json(['success' => false, 'message' => 'Customization not found'], 404);
        }
        
        $customization->update(['published' => true]);
        
        return response()->json(['success' => true, 'message' => 'Theme published successfully']);
    }
}
