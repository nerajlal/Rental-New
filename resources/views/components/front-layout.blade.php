<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentalJewel - Modern Rental Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0d6efd;
            --accent: #fd7e14;
        }
        body { font-family: 'Inter', sans-serif; }
        .serif-font { font-family: 'Georgia', serif; }
        .hero-section { padding: 80px 0; background: #f8f9fa; }
        .hero-title { font-size: 3.5rem; font-weight: 800; letter-spacing: -1px; line-height: 1.1; margin-bottom: 24px; }
        .marquee-container { overflow: hidden; white-space: nowrap; padding: 20px 0; background: #000; color: #fff; }
        .marquee-content { display: inline-block; animation: marquee 20s linear infinite; }
        .marquee-item { font-size: 1.5rem; font-weight: bold; margin: 0 30px; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .feature-card { padding: 30px; border-radius: 20px; background: #fff; border: 1px solid #eee; height: 100%; transition: transform 0.3s; }
        .feature-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .icon-box { font-size: 2rem; margin-bottom: 20px; }
        .floating-badge { position: absolute; background: white; padding: 15px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); display: flex; align-items: center; gap: 15px; z-index: 2; }
        .badge-1 { top: 20%; left: -20px; }
        .badge-2 { bottom: 20%; right: -20px; }
        .hero-image-wrapper { position: relative; }
        .hero-image { border-radius: 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-light py-5 mt-5 border-top">
        <div class="container text-center text-muted">
            <p>&copy; {{ date('Y') }} RentalJewel. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>
