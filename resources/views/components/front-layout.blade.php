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
        
        /* Modern Utilities */
        .btn-modern { background-color: #000; color: #fff; border: 2px solid #000; transition: all 0.3s; border-radius: 50px; }
        .btn-modern:hover { background-color: transparent; color: #000; transform: translateY(-2px); }
        
        .form-control { border-radius: 12px; }
        .form-control:focus { box-shadow: 0 0 0 4px rgba(0,0,0,0.05); border-color: #000; }
        
        .active-tab-btn { border-bottom: 3px solid #000 !important; color: #000 !important; background: transparent !important; }
        .inactive-tab-btn { border-bottom: 3px solid transparent !important; color: #6c757d !important; background: transparent !important; }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 d-flex align-items-center gap-2" href="{{ route('home') }}">
                <div class="bg-dark text-white d-inline-flex align-items-center justify-content-center rounded" style="width: 32px; height: 32px;">N</div>
                RentalJewel
                <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill small ms-2 px-2" style="font-size: 0.7rem; vertical-align: middle;">BETA</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-medium me-3">
                    <li class="nav-item px-2"><a class="nav-link text-dark" href="{{ route('how-it-works') }}">How it works</a></li>
                    <li class="nav-item px-2"><a class="nav-link text-dark" href="{{ route('pricing') }}">Pricing</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <button class="btn btn-modern px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#authModal">Start freely</button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <!-- Global Auth Modal -->
    <div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg overflow-hidden">
                <div class="modal-header border-0 p-0 position-relative">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3 z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Tabs -->
                    <div class="w-100 d-flex text-center border-bottom">
                        <button class="btn flex-fill py-3 fw-bold rounded-0 active-tab-btn" id="loginTabBtn" onclick="switchTab('login')">Login</button>
                        <button class="btn flex-fill py-3 fw-bold rounded-0 inactive-tab-btn" id="registerTabBtn" onclick="switchTab('register')">Register</button>
                    </div>
                </div>
                <div class="modal-body p-4 p-md-5">
                    
                    <!-- Login Form -->
                    <div id="loginFormSection">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold serif-font mb-2">Welcome Back</h3>
                            <p class="text-muted small">Access your dashboard to manage rentals.</p>
                        </div>
                        <form method="POST" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-secondary ps-1">EMAIL ADDRESS</label>
                                <input type="email" name="email" class="form-control form-control-lg fs-6 bg-light border-0 p-3 shadow-sm" required autofocus>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-secondary ps-1">PASSWORD</label>
                                <input type="password" name="password" class="form-control form-control-lg fs-6 bg-light border-0 p-3 shadow-sm" required>
                                <div class="text-end mt-2">
                                    <a href="#" class="small text-muted text-decoration-none">Forgot password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-modern w-100 py-3 fw-bold shadow-sm">Log In</button>
                        </form>
                    </div>

                    <!-- Register Form -->
                    <div id="registerFormSection" style="display: none;">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold serif-font mb-2">Create Account</h3>
                            <p class="text-muted small">Start your 14-day free trial. No card required.</p>
                        </div>
                        <form method="POST" action="{{ route('admin.register.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-secondary ps-1">SHOP NAME</label>
                                <input type="text" name="name" class="form-control form-control-lg fs-6 bg-light border-0 p-3 shadow-sm" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-secondary ps-1">EMAIL ADDRESS</label>
                                <input type="email" name="email" class="form-control form-control-lg fs-6 bg-light border-0 p-3 shadow-sm" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-secondary ps-1">PASSWORD</label>
                                <input type="password" name="password" class="form-control form-control-lg fs-6 bg-light border-0 p-3 shadow-sm" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold text-secondary ps-1">CONFIRM PASSWORD</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg fs-6 bg-light border-0 p-3 shadow-sm" required>
                            </div>
                            <button type="submit" class="btn btn-modern w-100 py-3 fw-bold shadow-sm">Create Shop</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tab) {
            const loginSection = document.getElementById('loginFormSection');
            const registerSection = document.getElementById('registerFormSection');
            const loginBtn = document.getElementById('loginTabBtn');
            const registerBtn = document.getElementById('registerTabBtn');

            if (tab === 'login') {
                loginSection.style.display = 'block';
                registerSection.style.display = 'none';
                
                loginBtn.classList.add('active-tab-btn');
                loginBtn.classList.remove('inactive-tab-btn');
                
                registerBtn.classList.add('inactive-tab-btn');
                registerBtn.classList.remove('active-tab-btn');
            } else {
                loginSection.style.display = 'none';
                registerSection.style.display = 'block';
                
                registerBtn.classList.add('active-tab-btn');
                registerBtn.classList.remove('inactive-tab-btn');
                
                loginBtn.classList.add('inactive-tab-btn');
                loginBtn.classList.remove('active-tab-btn');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->any())
                var authModal = new bootstrap.Modal(document.getElementById('authModal'));
                authModal.show();
                
                // Simple logic: if 'name' input has old value or error, likely registration
                @if(old('name') || $errors->has('name') || $errors->has('password_confirmation'))
                    switchTab('register');
                @endif
            @endif
        });
    </script>

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
