<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'Store Preview' }}</title>
    <meta name="description" content="{{ $settings->homepage_description ?? '' }}">
    
    @if($settings->google_analytics_id)
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $settings->google_analytics_id }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ $settings->google_analytics_id }}');
    </script>
    @endif
    
    @if($settings->facebook_pixel_id)
    <!-- Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ $settings->facebook_pixel_id }}');
        fbq('track', 'PageView');
    </script>
    @endif
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: {{ $settings->primary_color }};
            --text-color: {{ $settings->text_color }};
            --bg-color: {{ $settings->background_color }};
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
        }
        
        .navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 24px;
        }
        
        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            padding: 8px 16px !important;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .hero {
            background: linear-gradient(135deg, var(--primary-color) 0%, #00a876 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 20px;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto 30px;
        }
        
        .btn-primary {
            background-color: white;
            color: var(--primary-color);
            border: none;
            padding: 12px 32px;
            font-weight: 600;
            border-radius: 6px;
        }
        
        .btn-primary:hover {
            background-color: #f0f0f0;
            color: var(--primary-color);
        }
        
        .product-card {
            border: 1px solid #e1e3e5;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s;
        }
        
        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transform: translateY(-4px);
        }
        
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 15px;
            background: #f9fafb;
        }
        
        .product-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .product-card .price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 20px;
        }
        
        .footer {
            background: #f9fafb;
            padding: 40px 0 20px;
            margin-top: 80px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-gem me-2"></i>{{ Auth::user()->name }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @forelse($menuItems ?? [] as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                        </li>
                    @empty
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>{{ $settings->homepage_title ?? 'Welcome to Our Store' }}</h1>
            <p>{{ $settings->homepage_description ?? 'Discover our amazing products' }}</p>
            <button class="btn btn-primary">Shop Now</button>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Jewelry</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="product-card">
                        <div style="background: linear-gradient(135deg, {{ $settings->primary_color }} 0%, #00a876 100%); height: 200px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-gem fa-4x" style="color: white;"></i>
                        </div>
                        <h5>Bridal Necklace Set</h5>
                        <p class="text-muted small">Exquisite gold-plated design</p>
                        <div class="price">$450/week</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div style="background: linear-gradient(135deg, {{ $settings->primary_color }} 0%, #00a876 100%); height: 200px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-gem fa-4x" style="color: white;"></i>
                        </div>
                        <h5>Diamond Bangles</h5>
                        <p class="text-muted small">Sparkling cubic zirconia</p>
                        <div class="price">$300/week</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div style="background: linear-gradient(135deg, {{ $settings->primary_color }} 0%, #00a876 100%); height: 200px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-gem fa-4x" style="color: white;"></i>
                        </div>
                        <h5>Temple Jhumka</h5>
                        <p class="text-muted small">Traditional design</p>
                        <div class="price">$150/week</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div style="background: linear-gradient(135deg, {{ $settings->primary_color }} 0%, #00a876 100%); height: 200px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                            <i class="fas fa-gem fa-4x" style="color: white;"></i>
                        </div>
                        <h5>Maang Tikka</h5>
                        <p class="text-muted small">Antique finish</p>
                        <div class="price">$200/week</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted mb-0">&copy; 2026 {{ Auth::user()->name }}. All rights reserved.</p>
            <p class="text-muted small mt-2">
                @if($settings->subdomain)
                    <a href="{{ route('shop.online-store') }}" class="text-decoration-none">Back to Admin</a>
                @endif
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
