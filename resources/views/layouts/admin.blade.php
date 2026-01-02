<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - RentalJewel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .sidebar { width: 250px; position: fixed; top: 0; bottom: 0; left: 0; background-color: #fff; border-right: 1px solid #e9ecef; z-index: 1000; }
        .main-content { margin-left: 250px; padding: 20px; }
        .nav-link { color: #495057; font-weight: 500; padding: 10px 15px; display: flex; align-items: center; gap: 10px; border-radius: 8px; margin-bottom: 5px; }
        .nav-link:hover, .nav-link.active { background-color: #f0f2f5; color: #0d6efd; }
        .nav-link.active { background-color: #e7f1ff; }
        .nav-link i { width: 20px; text-align: center; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column p-3">
        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none text-dark mb-4 px-2">
            <div class="bg-dark text-white d-inline-flex align-items-center justify-content-center rounded" style="width: 32px; height: 32px;">N</div>
            <span class="fs-5 fw-bold">Nurah Admin</span>
        </a>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-shopping-bag"></i> Orders
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-box-open"></i> Products
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i> Customers
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-bar"></i> Analytics
                </a>
            </li>
        </ul>

        <hr class="my-3">

        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle px-2" data-bs-toggle="dropdown">
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                    {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                </div>
                <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>
            </a>
            <ul class="dropdown-menu shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">Sign out</button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
