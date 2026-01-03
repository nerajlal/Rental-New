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
        
        // Fetch navigation menus
        $mainMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'main')->first();
        $footerMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'footer')->first();
        
        return view('admin-shop.online-store', compact('settings', 'mainMenu', 'footerMenu'));
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

    public function previewStore(Request $request)
    {
        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        
        if (!$settings) {
            return redirect()->route('shop.online-store')->with('error', 'Please configure your store settings first.');
        }

        // Get navigation menus
        $mainMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'main')->first();
        $menuItems = $mainMenu ? json_decode($mainMenu->items, true) : [];
        
        $footerMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'footer')->first();
        $footerItems = $footerMenu ? json_decode($footerMenu->items, true) : [];

        // Check for draft mode from Customizer
        $isDraft = $request->query('mode') === 'draft';
        $forcedTheme = $request->query('theme');
        
        // Get theme customization
        $customization = \App\Models\ThemeCustomization::where('user_id', auth()->id())->first();

        // If customization exists and is published, OR if we are in draft mode
        if (($customization && $customization->published) || $isDraft) {
            $themeName = $forcedTheme ?? ($customization->theme_name ?? 'jewelry-luxe');
            
            // If in draft mode but no customization saved yet, create a dummy one for the view
            if (!$customization && $isDraft) {
                $customization = new \App\Models\ThemeCustomization([
                    'theme_name' => $themeName,
                    'sections' => [],
                    'section_order' => ['header', 'hero', 'featured-products', 'how-it-works', 'cta', 'testimonials', 'footer']
                ]);
            }
            
            // Normalize links for preview context
            $normalizeLinks = function($items) {
                return array_map(function($item) {
                    if ($item['url'] === '/' || $item['url'] === '/home') $item['url'] = route('shop.preview-store');
                    if ($item['url'] === '/shop') $item['url'] = route('shop.site.products');
                    if ($item['url'] === '/about') $item['url'] = route('shop.site.about');
                    if ($item['url'] === '/contact') $item['url'] = route('shop.site.contact');
                    if ($item['url'] === '/privacy') $item['url'] = route('shop.site.privacy');
                    return $item;
                }, $items);
            };

            $menuItems = $normalizeLinks($menuItems);
            $footerItems = $normalizeLinks($footerItems);
            $homeUrl = route('shop.preview-store');

            // Ensure we're rendering the requested theme if forced (e.g. previewing a different theme than published)
            if ($isDraft && $forcedTheme) {
                 // Verify view exists
                 if (view()->exists("admin-shop.themes.{$themeName}.index")) {
                     return view("admin-shop.themes.{$themeName}.index", compact('settings', 'customization', 'menuItems', 'footerItems', 'homeUrl'));
                 }
            } else {
                 return view("admin-shop.themes.{$customization->theme_name}.index", compact('settings', 'customization', 'menuItems', 'footerItems', 'homeUrl'));
            }
        }

        $homeUrl = route('shop.preview-store');
        // Fallback to default preview
        return view('admin-shop.preview-store', compact('settings', 'menuItems', 'footerItems', 'homeUrl'));
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
        $mainMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'main')->first();
        $menuItems = $mainMenu ? json_decode($mainMenu->items, true) : [];

        $footerMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'footer')->first();
        $footerItems = $footerMenu ? json_decode($footerMenu->items, true) : [];
        
        // Get store settings
        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        
        // Sort config sections based on saved order
        $savedOrder = $customization->section_order ?? ['header', 'hero', 'featured-products', 'how-it-works', 'cta', 'testimonials', 'footer'];
        
        // Create a map of config sections for easy lookup
        $configSections = collect($config['sections'])->keyBy('type');
        
        // Rebuild sections array based on order, appending any new config sections (like footer if missing from order)
        $orderedSections = [];
        $processedTypes = [];
        
        // Add saved sections in order
        foreach ($savedOrder as $type) {
            if (isset($configSections[$type])) {
                $orderedSections[] = $configSections[$type];
                $processedTypes[] = $type;
            }
        }
        
        // Append any remaining sections from config that weren't in saved order
        foreach ($configSections as $type => $section) {
            if (!in_array($type, $processedTypes)) {
                $orderedSections[] = $section;
                $savedOrder[] = $type; // Add to order state
            }
        }
        
        $config['sections'] = $orderedSections;
        // Pass normalized order (no duplicates/missing) to view
        $sectionOrder = $savedOrder; 
        
        return view('admin-shop.theme-customize', compact('customization', 'config', 'themeName', 'menuItems', 'footerItems', 'settings', 'sectionOrder'));
    }

    public function saveThemeCustomization(Request $request)
    {
        $customization = \App\Models\ThemeCustomization::where('user_id', auth()->id())->first();
        
        if (!$customization) {
            return response()->json(['success' => false, 'message' => 'Customization not found'], 404);
        }
        
        $sections = json_decode($request->sections, true);
        $sectionOrder = $request->section_order ? json_decode($request->section_order, true) : null;
        
        $updateData = ['sections' => $sections];
        if ($sectionOrder) {
            $updateData['section_order'] = $sectionOrder;
        }
        
        $customization->update($updateData);
        
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

    // Site Pages
    private function renderThemePage($view, $data = [])
    {
        $settings = \App\Models\StoreSettings::where('user_id', auth()->id())->first();
        $customization = \App\Models\ThemeCustomization::where('user_id', auth()->id())->first();
        $mainMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'main')->first();
        $menuItems = $mainMenu ? json_decode($mainMenu->items, true) : [];
        
        $footerMenu = \DB::table('navigation_menus')->where('user_id', auth()->id())->where('type', 'footer')->first();
        $footerItems = $footerMenu ? json_decode($footerMenu->items, true) : [];
        
        $viewPath = "admin-shop.themes.{$customization->theme_name}.pages.{$view}";
        
        // Normalize links
        $normalizeLinks = function($items) {
            return array_map(function($item) {
                if ($item['url'] === '/' || $item['url'] === '/home') $item['url'] = route('shop.preview-store');
                if ($item['url'] === '/shop') $item['url'] = route('shop.site.products');
                if ($item['url'] === '/about') $item['url'] = route('shop.site.about');
                if ($item['url'] === '/contact') $item['url'] = route('shop.site.contact');
                if ($item['url'] === '/privacy') $item['url'] = route('shop.site.privacy');
                return $item;
            }, $items);
        };
        
        $menuItems = $normalizeLinks($menuItems);
        $footerItems = $normalizeLinks($footerItems);
        $homeUrl = route('shop.preview-store');
        
        // Fallback or create if dynamic lookup needed, for now assuming jewelry-luxe
        if (!view()->exists($viewPath)) {
            $viewPath = "admin-shop.themes.jewelry-luxe.pages.{$view}";
        }
        
        return view($viewPath, compact('settings', 'customization', 'menuItems', 'footerItems', 'data', 'homeUrl'));
    }

    public function siteProducts() { return $this->renderThemePage('products'); }
    public function siteAbout() { return $this->renderThemePage('about'); }
    public function siteContact() { return $this->renderThemePage('contact'); }
    public function sitePrivacy() { return $this->renderThemePage('privacy'); }
}
