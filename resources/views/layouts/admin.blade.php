<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - RentalJewel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            --p-topbar-height: 56px;
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
            padding-top: 0;
            display: flex;
            flex-direction: column;
        }
        
        .sidebar-brand {
            height: var(--p-topbar-height);
            display: flex;
            align-items: center;
            padding: 0 1rem;
            color: white;
            font-weight: 600;
            text-decoration: none;
            background-color: rgba(0,0,0,0.2); /* Slightly darker brand area */
        }

        .nav-link { 
            color: #acb0b5; 
            font-weight: 500; 
            padding: 0.5rem 1rem; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            transition: all 0.1s;
            border-radius: 4px;
            margin: 4px 8px;
            font-size: 0.9rem;
        }
        
        .nav-link:hover { 
            background-color: rgba(255,255,255,0.08); 
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
            left: -8px; 
            top: 6px; 
            bottom: 6px;
            width: 3px;
            background-color: var(--p-primary);
            border-radius: 0 3px 3px 0;
            display: none; /* Removed standard implementation in favor of full bg */
        }
        
        /* Top Bar */
        .top-bar {
            position: fixed;
            top: 0;
            left: 240px;
            right: 0;
            height: var(--p-topbar-height);
            background: white;
            border-bottom: 1px solid #e1e3e5;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            z-index: 900;
        }
        
        .search-container {
            position: relative;
            width: 400px;
        }
        
        .search-input {
            background: #f1f2f3;
            border: 1px solid transparent;
            padding: 0.5rem 1rem 0.5rem 2.2rem;
            border-radius: 4px;
            font-size: 0.9rem;
            width: 100%;
            transition: 0.2s;
        }
        .search-input:focus {
            background: white;
            border-color: #c9cccf;
            box-shadow: 0 0 0 1px #c9cccf;
            outline: none;
        }
        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6d7175;
            font-size: 0.8rem;
        }

        /* Main Content */
        .main-content { 
            margin-left: 240px; 
            margin-top: var(--p-topbar-height);
            padding: 2rem; 
            max-width: 1000px; 
            margin-right: auto;
        }
        
        /* Polaris Card */
        .polaris-card {
            background: white;
            border-radius: 8px;
            box-shadow: var(--p-card-shadow);
            border: none;
            padding: 1.5rem;
        }
        
        .notification-btn {
            background: none;
            border: none;
            color: #5c5f62;
            padding: 8px;
            border-radius: 4px;
            position: relative;
        }
        .notification-btn:hover { background: #f1f2f3; color: #202223; }
        .notification-dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: red;
            border-radius: 50%;
            border: 1px solid white;
        }

        .user-menu-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: none;
            border: none;
            padding: 4px 8px;
            border-radius: 4px;
        }
        .user-menu-btn:hover { background: #f1f2f3; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
            <div class="bg-success text-white d-flex align-items-center justify-content-center rounded" style="width: 28px; height: 28px; background-color: var(--p-primary) !important; margin-right: 10px;">R</div>
            <span>RentalJewel</span>
        </a>

        <div class="px-2 py-3">
            <ul class="nav flex-column gap-1">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-inbox"></i> Orders <span class="badge bg-secondary bg-opacity-25 text-light ms-auto" style="font-size: 10px;">2</span>
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
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bullhorn"></i> Marketing
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-percent"></i> Discounts
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="mt-auto px-2 py-3 border-top border-secondary border-opacity-10">
            <a href="#" class="nav-link">
                <i class="fas fa-cog"></i> Settings
            </a>
        </div>
    </aside>

    <!-- Top Bar -->
    <header class="top-bar">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Search">
        </div>
        
        <div class="d-flex align-items-center gap-3">
            <button class="notification-btn">
                <i class="fas fa-bell"></i>
                <span class="notification-dot"></span>
            </button>
            
            <div class="dropdown">
                <button class="user-menu-btn" data-bs-toggle="dropdown">
                    <div class="bg-success d-flex align-items-center justify-content-center text-white rounded font-weight-bold" style="width: 30px; height: 30px; font-size: 0.8rem;">
                        {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                    </div>
                    <span class="small fw-semibold text-dark">{{ Auth::user()->name ?? 'Admin' }}</span>
                </button>
                <ul class="dropdown-menu shadow-sm border-0 dropdown-menu-end" style="box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 200px;">
                    <li><h6 class="dropdown-header">Manage Account</h6></li>
                    <li><a class="dropdown-item small py-2" href="#">Profile</a></li>
                    <li><a class="dropdown-item small py-2" href="#">Billing</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item small py-2 text-danger">Log out</button>
                        </form>
                    </li>
                </ul>
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
