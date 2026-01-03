<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'My Store' }} - Contact Us</title>
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
        <h1 class="text-center mb-5 display-5 fw-bold">Contact Us</h1>
        
        <div class="row justify-content-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="p-4 bg-light rounded h-100">
                    <h4 class="mb-4">Get in Touch</h4>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Visit Us</h6>
                            <p class="text-muted mb-0 small">123 Jewelry Lane, Fashion District<br>Mumbai, MH 400001</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                            <i class="fas fa-phone-alt text-primary"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Call Us</h6>
                            <p class="text-muted mb-0 small">+91 98765 43210</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <div class="bg-white p-3 rounded-circle shadow-sm me-3">
                            <i class="fas fa-envelope text-primary"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email Us</h6>
                            <p class="text-muted mb-0 small">support@metora.in</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Inquiry Subject">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark px-4 py-2" style="background-color: var(--primary-color); border-color: var(--primary-color);">Send Message</button>
                        </div>
                    </div>
                </form>
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
