<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - RentalJewel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            /* Polaris Design Tokens */
            --p-background: #f1f2f3;
            --p-surface: #ffffff;
            --p-on-surface: #202223;
            --p-text: #202223;
            --p-text-subdued: #6d7175;
            --p-primary: #008060;
            --p-primary-hover: #006e52;
            --p-primary-pressed: #004d3a;
            --p-sidebar-bg: #1a1c1d; /* Legacy Dark Sidebar */
            --p-sidebar-hover: #303030;
            --p-sidebar-active: #303030; /* or slightly refined */
            --p-border-subdued: #c9cccf;
            --p-shadow-card: 0px 0px 5px rgba(0, 0, 0, 0.05), 0px 1px 2px rgba(0, 0, 0, 0.15);
            --p-topbar-height: 56px;
            
            /* BOOTSTRAP OVERRIDES (Force Shopify Green) */
            --bs-primary: #008060;
            --bs-link-color: #008060;
            --bs-link-hover-color: #004d3a;
        }
        
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, "Helvetica Neue", sans-serif; 
            background-color: var(--p-background); 
            color: var(--p-text);
            font-size: 14px;
        }

        /* Generic Link Override */
        a { color: var(--p-primary); text-decoration: none; }
        a:hover { color: var(--p-primary-hover); }
        .text-dark a { color: inherit !important; } /* Restore for specifically dark links */

        /* Form Controls (Inputs, Checkboxes) */
        .form-control:focus {
            border-color: #008060;
            box-shadow: 0 0 0 0.2rem rgba(0, 128, 96, 0.25);
        }
        .form-check-input:checked {
            background-color: #008060;
            border-color: #008060;
        }

        /* Sidebar - Exact Shopify Dark Theme */
        .sidebar { 
            width: 240px; 
            position: fixed; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            background-color: #202123; /* Darker, slightly softer black */
            z-index: 1000; 
            display: flex;
            flex-direction: column;
            border-right: 1px solid #313336;
        }
        
        .sidebar-brand-area {
            height: var(--p-topbar-height);
            display: flex;
            align-items: center;
            padding: 0 1rem;
            background-color: #1a1c1d; /* Slightly darker than sidebar */
            border-bottom: 1px solid #313336;
            margin-bottom: 8px;
        }
        
        .store-selector {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #e3e5e7;
            text-decoration: none;
            width: 100%;
            padding: 4px 8px;
            border-radius: 4px;
            transition: 0.2s;
        }
        .store-selector:hover { background: rgba(255,255,255,0.1); }
        .store-avatar {
            width: 28px; height: 28px;
            background: #47c1bf; /* Shopify Teal for initials */
            color: white; /* Text color inside avatar */
            border-radius: 4px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 600; font-size: 12px;
        }

        .nav-group-label {
            padding: 12px 16px 4px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            color: #6d7175; /* Subdued text for headers if used */
            letter-spacing: 0.05em;
        }

        .nav-link { 
            color: #d2d5d8; /* Softer white */
            font-weight: 500; 
            padding: 6px 12px; 
            margin: 2px 8px;
            display: flex; 
            align-items: center; 
            gap: 12px; 
            transition: 0.1s;
            border-radius: 4px;
            font-size: 14px;
            border: none;
        }
        
        .nav-link:hover { 
            background-color: #303030; 
            color: #f1f2f3; 
        }
        
        .nav-link.active { 
            background-color: #303030; 
            color: #ffffff; 
            font-weight: 600;
        }
        
        /* Shopify active indicator is often subtle or just the bg, but green text on icon sometimes */
        .nav-link.active i { color: #5c6ac4; /* actually Shopify uses Indigo in admin or Teal, let's stick to simple white/grey specific */ color: #47c1bf; } 
        .nav-link i { width: 20px; text-align: center; opacity: 1; font-size: 14px; color: #a6abb2; }


        /* Top Bar - White strip with Search */
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
        
        .search-wrapper {
            background: #f1f2f3;
            border: 1px solid #d2d5d8;
            border-radius: 4px;
            padding: 5px 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            width: 400px;
            height: 36px;
        }
        .search-wrapper:focus-within {
            background: #ffffff;
            border-color: #008060;
            box-shadow: 0 0 0 1px #008060;
        }
        .search-input {
            border: none;
            background: transparent;
            font-size: 14px;
            width: 100%;
            outline: none;
            color: #202223;
        }
        
        /* Layout Grid */
        .main-content { 
            margin-left: 240px; 
            margin-top: var(--p-topbar-height);
            padding: 32px; /* Shopify uses generous spacing */
            max-width: 1100px; 
            margin-right: auto;
        }
        
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
        .p-btn:hover { background: #f6f6f7; border-color: #b0bfcd; color: #202223; }
        
        .p-btn-primary {
            background: #008060;
            border: 1px solid #008060;
            box-shadow: 0 1px 0 rgba(0,0,0,0.1);
            color: white;
        }
        .p-btn-primary:hover { background: #006e52; border-color: #006e52; color: white; }

        .text-subdued { color: #6d7175 !important; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Store Name / Brand -->
        <div class="sidebar-brand-area">
            <a href="{{ route('admin.dashboard') }}" class="store-selector">
                <div class="store-avatar">R</div>
                <div class="d-flex flex-column" style="line-height: 1.2;">
                    <span style="font-weight: 600; font-size: 14px;">RentalJewel</span>
                    <span style="font-size: 12px; color: #9da3a9;">Admin</span>
                </div>
                <i class="fas fa-chevron-down ms-auto" style="font-size: 10px; opacity: 0.7;"></i>
            </a>
        </div>

        <!-- Navigation -->
        <div class="py-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> <span>Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-store"></i> <span>All Sites</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i> <span>Tenants</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill-wave"></i> <span>Billing & Plans</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-pie"></i> <span>Platform Report</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-ticket-alt"></i> <span>Support Tickets</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="mt-auto p-2 border-top border-secondary border-opacity-10">
            <a href="#" class="nav-link">
                <i class="fas fa-cog"></i> <span>Platform Settings</span>
            </a>
        </div>
    </aside>

    <!-- Top Bar -->
    <header class="top-bar">
        <div class="search-wrapper">
            <i class="fas fa-search" style="color: #5c5f62;"></i>
            <input type="text" class="search-input" placeholder="Search">
        </div>
        
        <div class="d-flex align-items-center gap-3">
            <button style="background: none; border: none; font-size: 16px; color: #5c5f62; padding: 4px;">
                <i class="far fa-bell"></i>
            </button>
            
            <div class="d-flex align-items-center gap-2">
                <div style="width: 30px; height: 30px; background: #e3e3e3; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 12px; color: #5c5f62;">
                    {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                </div>
                <span class="small fw-medium text-dark">{{ Auth::user()->name ?? 'Admin' }}</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
