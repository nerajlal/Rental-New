<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'My Store' }} - Privacy Policy</title>
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
            <div class="col-lg-8">
                <h1 class="mb-5 display-5 fw-bold text-center">Privacy Policy</h1>
                
                <div class="prose">
                    <p class="mb-4">Last Updated: {{ date('F d, Y') }}</p>

                    <h4>1. Introduction</h4>
                    <p class="mb-4">
                        We value your privacy and are committed to protecting your personal information. This policy explains how we collect, use, and safeguard your data when you use our rental services.
                    </p>

                    <h4>2. Information We Collect</h4>
                    <p class="mb-4">
                        We collect information you provide directly to us, such as when you create an account, place a rental order, or contact us for support. This may include your name, email address, phone number, and rental history.
                    </p>

                    <h4>3. How We Use Your Information</h4>
                    <p class="mb-4">
                        We use the information we collect to:
                        <ul class="mb-3">
                            <li>Process and manage your rental orders</li>
                            <li>Communicate with you about your orders and our services</li>
                            <li>Improve our website and customer experience</li>
                            <li>Comply with legal obligations</li>
                        </ul>
                    </p>

                    <h4>4. Data Security</h4>
                    <p class="mb-4">
                        We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.
                    </p>

                    <h4>5. Contact Us</h4>
                    <p>
                        If you have any questions about this Privacy Policy, please contact us at support@metora.in or visit our store.
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
