<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - RentalJewel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inter Font (Close to Shopify Sans) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --p-surface: #f6f6f7;
            --p-on-surface: #202223;
            --p-text: #202223;
            --p-text-subdued: #6d7175;
            --p-primary: #008060;
            --p-primary-hover: #006e52;
            --p-sidebar-bg: #1a1c1d;
            --p-sidebar-text: #e3e5e7;
            --p-sidebar-active: #303030;
            --p-card-shadow: 0 0 0 1px rgba(63,63,68,0.05), 0 1px 3px 0 rgba(63,63,68,0.15);
        }
        
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Inter", "Segoe UI", Roboto, sans-serif; 
            background-color: var(--p-surface); 
            color: var(--p-text);
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
            padding-top: 1rem;
        }
        
        .sidebar-brand {
            color: white;
            padding: 0 1.5rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            text-decoration: none;
        }

        .nav-link { 
            color: #acb0b5; 
            font-weight: 500; 
            padding: 0.5rem 1.5rem; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            transition: all 0.2s;
            border-radius: 0;
            position: relative;
            font-size: 0.95rem;
        }
        
        .nav-link:hover { 
            background-color: rgba(255,255,255,0.05); 
            color: #f6f6f7; 
        }
        
        .nav-link.active { 
            background-color: var(--p-sidebar-active); 
            color: white; 
            font-weight: 600;
        }
        
        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: var(--p-primary);
        }

        .nav-link i { width: 20px; text-align: center; opacity: 0.8; }
        .nav-link.active i { opacity: 1; color: var(--p-primary); } /* Optional: tint icon */
        .nav-link.active i { color: inherit; } /* Actually keep white for contrast */

        /* Main Content */
        .main-content { margin-left: 240px; padding: 2rem; max-width: 1100px; }
        
        /* Custom Card Style for Polaris feel */
        .polaris-card {
            background: white;
            border-radius: 8px;
            box-shadow: var(--p-card-shadow);
            border: none;
            padding: 1.5rem;
        }
        
        .text-subdued { color: var(--p-text-subdued) !important; }
        
        /* User Menu */
        .user-menu-btn {
            color: #acb0b5;
            padding: 10px 1.5rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.2s;
        }
        .user-menu-btn:hover { background: rgba(255,255,255,0.05); color: white; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
            <div class="bg-success text-white d-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; background-color: var(--p-primary) !important;">R</div>
            <span>RentalJewel</span>
        </a>

        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-tags"></i> Orders
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-tag"></i> Products
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i> Customers
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-line"></i> Analytics
                </a>
            </li>
        </ul>

        <div class="mt-auto border-top border-secondary border-opacity-25 pt-2 mb-2">
            <div class="dropdown">
                <a href="#" class="user-menu-btn dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="bg-secondary bg-opacity-50 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; font-size: 0.8rem;">
                        {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                    </div>
                    <span class="small fw-medium">{{ Auth::user()->name ?? 'Admin' }}</span>
                </a>
                <ul class="dropdown-menu shadow border-0" style="box-shadow: var(--p-card-shadow);">
                    <li><a class="dropdown-item small" href="#">Manage Account</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item small text-danger">Log out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
