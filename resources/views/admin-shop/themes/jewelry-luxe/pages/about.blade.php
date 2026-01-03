<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'My Store' }} - About Us</title>
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
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="mb-4 display-5 fw-bold">About Us</h1>
                <p class="lead text-muted mb-5">
                    Welcome to our premium jewelry rental service. We believe that everyone deserves to wear exquisite jewelry on their special occasions without the heavy price tag.
                </p>
                
                <img src="https://images.unsplash.com/photo-1584302179602-e4c3d3fd629d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                     class="img-fluid rounded shadow-sm mb-5" alt="Our Store">
                
                <div class="text-start">
                    <h3 class="mb-3">Our Story</h3>
                    <p class="mb-4">
                        Founded with a passion for elegance and sustainability, we maintain a curated collection of traditional and modern jewelry designs. Each piece in our collection is handpicked to ensure the highest quality and craftsmanship.
                    </p>
                    
                    <h3 class="mb-3">Our Promise</h3>
                    <p>
                        We promise authenticity, hygiene, and exceptional service. Every piece is professionally cleaned and polished before it reaches your hands.
                    </p>
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
