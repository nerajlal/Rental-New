<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shop') - RentalJewel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            /* Polaris Design Tokens - "Alpha" Light Theme */
            --p-background: #f1f2f3; 
            --p-surface: #ffffff;
            --p-on-surface: #202223;
            --p-text: #202223;
            --p-text-subdued: #6d7175;
            --p-primary: #008060;
            --p-primary-hover: #006e52;
            --p-primary-pressed: #004d3a;
            
            /* Unified White Sidebar */
            --p-sidebar-bg: #ffffff; 
            --p-sidebar-hover: #f6f6f7;
            --p-sidebar-active-bg: rgba(0, 128, 96, 0.15); 
            --p-sidebar-active-text: #008060;
            
            --p-border-subdued: #e1e3e5;
            --p-shadow-card: 0px 0px 5px rgba(0, 0, 0, 0.05), 0px 1px 2px rgba(0, 0, 0, 0.15);
            --p-topbar-height: 56px;
            
            /* BOOTSTRAP OVERRIDES */
            --bs-primary: #008060;
            --bs-link-color: #008060;
            --bs-link-hover-color: #004d3a;
        }
        
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif; 
            background-color: var(--p-background); 
            color: var(--p-text);
            font-size: 14px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Generic Link Override */
        a { color: var(--p-primary); text-decoration: none; }
        a:hover { color: var(--p-primary-hover); }
        .text-dark a { color: inherit !important; }

        /* Form Controls */
        .form-control:focus {
            border-color: #008060;
            box-shadow: 0 0 0 0.2rem rgba(0, 128, 96, 0.25);
        }
        
        /* Sidebar */
        .sidebar { 
            width: 240px; 
            position: fixed; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            background-color: var(--p-sidebar-bg); 
            z-index: 1000; 
            display: flex;
            flex-direction: column;
            border-right: 1px solid var(--p-border-subdued);
        }
        
        .sidebar-brand-area {
            height: var(--p-topbar-height);
            display: flex;
            align-items: center;
            padding: 0 1rem;
            border-bottom: 1px solid var(--p-border-subdued);
        }
        
        .nav-link { 
            color: #5c5f62; 
            font-weight: 500; 
            padding: 8px 12px; 
            margin: 4px 12px;
            display: flex; 
            align-items: center; 
            gap: 12px; 
            transition: 0.1s;
            border-radius: 8px; 
            font-size: 14px;
        }
        
        .nav-link:hover { 
            background-color: var(--p-sidebar-hover); 
            color: #202223; 
        }
        
        .nav-link.active { 
            background-color: var(--p-sidebar-active-bg); 
            color: var(--p-sidebar-active-text);
            font-weight: 600;
        }
        .nav-link i { width: 20px; text-align: center; opacity: 1; font-size: 14px; color: #8c9196; }
        .nav-link.active i { color: var(--p-sidebar-active-text); }


        /* Top Bar */
        .top-bar {
            position: fixed;
            top: 0;
            left: 240px;
            right: 0;
            height: var(--p-topbar-height);
            background: #ffffff;
            border-bottom: 1px solid #e1e3e5;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
            z-index: 900;
        }
        
        /* Main Application Area (Content + Footer) */
        .app-wrapper {
            margin-left: 240px; 
            margin-top: var(--p-topbar-height);
            display: flex;
            flex-direction: column;
            min-height: calc(100vh - var(--p-topbar-height));
        }

        .main-content { 
            padding: 32px; 
            flex: 1;
            max-width: 1100px;
            width: 100%; 
            margin: 0 auto;
        }
        
        /* Footer */
        .app-footer {
            text-align: center;
            padding: 20px;
            color: #989898;
            font-size: 12px;
            background: transparent;
            margin-top: auto; /* Pushes footer to bottom */
        }
        .app-footer a { color: #989898; text-decoration: none; font-weight: 500; }
        .app-footer a:hover { color: #5c5f62; }
        
        /* Utility */
        .p-btn {
            background: linear-gradient(180deg, #fff 0%, #f9fafb 100%);
            border: 1px solid #c9cccf;
            box-shadow: 0 1px 0 rgba(0,0,0,0.05);
            border-radius: 4px;
            padding: 6px 12px;
            font-size: 13px;
            font-weight: 500;
            color: #202223;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        
        /* Mobile */
        @media (max-width: 991px) {
            .sidebar { transform: translateX(-100%); transition: transform 0.3s ease-in-out; }
            .sidebar.show { transform: translateX(0); }
            .app-wrapper { margin-left: 0; }
            .top-bar { left: 0; }
            .main-content { padding: 16px; }
            .mobile-overlay {
                display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0;
                background: rgba(0,0,0,0.5); z-index: 990;
            }
            .mobile-overlay.show { display: block; }
        }
    </style>
</head>
<body>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand-area justify-content-between">
            <a href="{{ route('shop.dashboard') }}" class="d-flex align-items-center gap-2 text-dark text-decoration-none">
                <div style="width: 28px; height: 28px; background: #e3e3e3; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; color: #5c5f62;">S</div>
                <div class="d-flex flex-column" style="line-height: 1.2;">
                    <span style="font-weight: 600; font-size: 14px;">{{ Auth::user()->name }}</span>
                    <span style="font-size: 12px; color: #9da3a9;">Shop Panel</span>
                </div>
            </a>
            <button class="btn btn-link text-dark d-lg-none p-0 ms-2" id="sidebarClose"><i class="fas fa-times"></i></button>
        </div>

        <div class="py-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('shop.dashboard') }}" class="nav-link {{ request()->routeIs('shop.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.orders') }}" class="nav-link {{ request()->routeIs('shop.orders') ? 'active' : '' }}">
                        <i class="fas fa-shopping-bag"></i> <span>Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.products') }}" class="nav-link {{ request()->routeIs('shop.products*') ? 'active' : '' }}">
                        <i class="fas fa-box"></i> <span>Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.customers') }}" class="nav-link {{ request()->routeIs('shop.customers') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> <span>Customers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.content') }}" class="nav-link {{ request()->routeIs('shop.content') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i> <span>Content</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.analytics') }}" class="nav-link {{ request()->routeIs('shop.analytics') ? 'active' : '' }}">
                        <i class="fas fa-chart-line"></i> <span>Analytics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.marketing') }}" class="nav-link {{ request()->routeIs('shop.marketing') ? 'active' : '' }}">
                        <i class="fas fa-bullhorn"></i> <span>Marketing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.discounts') }}" class="nav-link {{ request()->routeIs('shop.discounts') ? 'active' : '' }}">
                        <i class="fas fa-tags"></i> <span>Discounts</span>
                    </a>
                </li>
                
                <!-- Sales Channels -->
                <li class="nav-item mt-3">
                    <div class="px-3 mb-2">
                        <small class="text-uppercase fw-bold" style="font-size: 11px; color: #6d7175; letter-spacing: 0.5px;">Sales channels</small>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('shop.online-store') }}" class="nav-link {{ request()->routeIs('shop.online-store') ? 'active' : '' }}">
                        <i class="fas fa-store"></i> <span>Online Store</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="mt-auto p-2 border-top border-secondary border-opacity-10">
             <div class="dropup">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog"></i> <span>Settings</span></a>
                <ul class="dropdown-menu shadow-lg border-0 mb-2">
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item small py-2 text-danger"><i class="fas fa-sign-out-alt me-2"></i>Log out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Top Bar -->
    <header class="top-bar">
        <button class="btn btn-link text-dark d-lg-none me-2" id="sidebarToggle"><i class="fas fa-bars"></i></button>
        <div class="ms-auto d-flex align-items-center gap-3">
             <div class="d-flex align-items-center gap-2">
                <span class="small fw-medium text-dark">{{ Auth::user()->name }}</span>
            </div>
        </div>
    </header>

    <!-- App Wrapper -->
    <div class="app-wrapper">
        <main class="main-content">
            @yield('content')
        </main>
        
        <!-- Footer -->
        <footer class="app-footer">
            Developed and maintained by <a href="#" target="_blank">Metora</a>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.getElementById('sidebarToggle');
            const close = document.getElementById('sidebarClose');
            const overlay = document.getElementById('mobileOverlay');

            function toggleSidebar() {
                sidebar.classList.toggle('show');
                overlay.classList.toggle('show');
            }

            if(toggle) toggle.addEventListener('click', toggleSidebar);
            if(close) close.addEventListener('click', toggleSidebar);
            if(overlay) overlay.addEventListener('click', toggleSidebar);
        });
    </script>
</body>
</html>
