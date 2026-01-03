<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'My Store' }} - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: {{ $settings->primary_color ?? '#008060' }};
            --text-color: {{ $settings->text_color ?? '#202223' }};
            --bg-color: {{ $settings->background_color ?? '#ffffff' }};
        }
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body>

    <!-- Header -->
    @include('admin-shop.themes.jewelry-luxe.sections.header', [
        'data' => $customization->getSectionData('header'),
        'menuItems' => $menuItems
    ])

    <div class="container py-5">
        <h1 class="text-center mb-5 display-5 fw-bold">Our Collection</h1>
        
        <div class="row g-4">
            <!-- Sample Product 1 -->
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1515562141207-7a88fb052576?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Product" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Diamond Necklace</h6>
                        <p class="text-muted mb-2">₹15,000 / day</p>
                        <button class="btn btn-sm btn-outline-dark w-100">View Details</button>
                    </div>
                </div>
            </div>
            <!-- Sample Product 2 -->
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1603974372039-adc49044b3bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Product" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Gold Bangles</h6>
                        <p class="text-muted mb-2">₹8,000 / day</p>
                        <button class="btn btn-sm btn-outline-dark w-100">View Details</button>
                    </div>
                </div>
            </div>
            <!-- Sample Product 3 -->
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1535632787350-4e68ef0ac584?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Product" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Bridal Set</h6>
                        <p class="text-muted mb-2">₹25,000 / day</p>
                        <button class="btn btn-sm btn-outline-dark w-100">View Details</button>
                    </div>
                </div>
            </div>
            <!-- Sample Product 4 -->
            <div class="col-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1601121141461-9d6647bca1ed?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Product" style="height: 300px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Ruby Earrings</h6>
                        <p class="text-muted mb-2">₹5,000 / day</p>
                        <button class="btn btn-sm btn-outline-dark w-100">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('admin-shop.themes.jewelry-luxe.sections.footer', [
        'data' => $customization->getSectionData('footer')
    ])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
