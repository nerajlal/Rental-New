<x-front-layout>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-warning-subtle text-warning-emphasis fw-bold small mb-4">
                        <span class="badge bg-warning rounded-circle p-1"></span> New: Analytics 2.0
                    </div>
                    <h1 class="hero-title">
                        Run your <span class="serif-font fst-italic">rental business</span> like a modern brand
                    </h1>
                    <p class="lead text-muted mb-5 pe-lg-5">
                        Replace messy spreadsheets with a powerful, all-in-one platform designed for jewelry rental businesses. Bookings, inventory, and payments—simplified.
                    </p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-modern px-4 py-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login / Get Started</button>
                        <button class="btn btn-light rounded-pill px-4 py-3 fw-bold border">Watch Demo</button>
                    </div>

                    <!-- Login Modal -->
                    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow-lg rounded-4">
                                <div class="modal-body p-5">
                                    <div class="text-center mb-4">
                                        <div class="bg-dark text-white d-inline-flex align-items-center justify-content-center rounded fw-bold fs-4 mb-3" style="width: 48px; height: 48px;">N</div>
                                        <h3 class="fw-bold">Welcome Back</h3>
                                        <p class="text-muted small">Enter your credentials to access the admin panel.</p>
                                    </div>

                                    <form method="POST" action="{{ route('admin.login.submit') }}">
                                        @csrf
                                        
                                        @if ($errors->any())
                                            <div class="alert alert-danger px-3 py-2 text-danger small mb-4">
                                                <ul class="list-unstyled mb-0 list-disc ps-3">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="email" class="form-label fw-medium small text-secondary mb-1">Email</label>
                                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="form-control shadow-sm p-3">
                                        </div>

                                        <div class="mb-4">
                                            <label for="password" class="form-label fw-medium small text-secondary mb-1">Password</label>
                                            <input type="password" id="password" name="password" required class="form-control shadow-sm p-3">
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold shadow-sm mb-3">Login</button>
                                        
                                        <div class="text-center">
                                            <a href="#" class="small text-muted text-decoration-none">Forgot password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5 d-flex align-items-center gap-4">
                        <div class="d-flex">
                            <img src="https://i.pravatar.cc/100?img=1" class="rounded-circle border border-2 border-white" width="40" alt="">
                            <img src="https://i.pravatar.cc/100?img=5" class="rounded-circle border border-2 border-white ms-n3" style="margin-left: -15px;" width="40" alt="">
                            <img src="https://i.pravatar.cc/100?img=9" class="rounded-circle border border-2 border-white ms-n3" style="margin-left: -15px;" width="40" alt="">
                        </div>
                        <p class="mb-0 small fw-bold text-muted">Trusted by 500+ shop owners</p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="hero-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1531995811006-35cb42e1a022?q=80&w=2540&auto=format&fit=crop" class="img-fluid hero-image" alt="Dashboard">
                        
                        <!-- Floating Badges -->
                        <div class="floating-badge badge-1">
                            <div class="icon-box mb-0 text-success bg-success-subtle" style="width: 40px; height: 40px; font-size: 1rem;">$</div>
                            <div>
                                <h6 class="mb-0 fw-bold">Revenue Up</h6>
                                <small class="text-success">+24% this month</small>
                            </div>
                        </div>

                        <div class="floating-badge badge-2">
                            <div class="icon-box mb-0 text-primary bg-primary-subtle" style="width: 40px; height: 40px; font-size: 1rem;">✓</div>
                            <div>
                                <h6 class="mb-0 fw-bold">New Booking</h6>
                                <small class="text-muted">Bridal Set #8821</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scrolling Marquee -->
    <div class="marquee-container">
        <div class="marquee-content">
            <span class="marquee-item">MODERN</span>
            <span class="marquee-item">ELEGANT</span>
            <span class="marquee-item">EFFICIENT</span>
            <span class="marquee-item">SECURE</span>
            <span class="marquee-item">SCALABLE</span>
            <span class="marquee-item">MODERN</span>
            <span class="marquee-item">ELEGANT</span>
            <span class="marquee-item">EFFICIENT</span>
            <span class="marquee-item">SECURE</span>
            <span class="marquee-item">SCALABLE</span>
        </div>
    </div>

    <!-- Features -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-6 mx-auto">
                    <h2 class="display-6 fw-bold mb-3">Everything you need</h2>
                    <p class="text-muted">We give you the tools big e-commerce brands use, customized for the unique needs of rental businesses.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="icon-box" style="color: var(--accent);"><i class="fa-solid fa-box-open"></i></div>
                        <h3 class="h4 fw-bold mb-3">Inventory Pro</h3>
                        <p class="text-muted mb-0">Track stock levels, cleaning schedules, and item conditions in real-time. Never lose track of a piece again.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="icon-box" style="color: var(--accent);"><i class="fa-solid fa-calendar-check"></i></div>
                        <h3 class="h4 fw-bold mb-3">Smart Calendar</h3>
                        <p class="text-muted mb-0">Avoid double bookings. Our system automatically pads bookings with buffer time for returns and cleaning.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="icon-box" style="color: var(--accent);"><i class="fa-solid fa-credit-card"></i></div>
                        <h3 class="h4 fw-bold mb-3">Secure Deposits</h3>
                        <p class="text-muted mb-0">We automate security holds on customer cards, so you can rent out high-value items with total peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Large CTA -->
    <section class="py-5">
        <div class="container">
            <div class="bg-dark text-white rounded-[50px] p-5 p-lg-5 text-center" style="border-radius: 40px; position: relative; overflow: hidden;">
                <!-- Abstract Background Shapes -->
                <div style="position: absolute; top: -50px; left: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                <div style="position: absolute; bottom: -50px; right: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                <div class="position-relative z-1 py-5">
                    <h2 class="display-4 serif-font mb-4">Ready to launch?</h2>
                    <p class="lead text-white-50 mb-5 max-w-2xl mx-auto">Join the new wave of jewelry entrepreneurs building their future with RentalJewel.</p>
<button class="btn btn-light rounded-pill px-5 py-3 fw-bold text-dark h5 mb-0" data-bs-toggle="modal" data-bs-target="#loginModal">Start 14-Day Free Trial</button>
                    <p class="small text-white-50 mt-4">No credit card required</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->any())
                var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                loginModal.show();
            @endif
        });
    </script>
</x-front-layout>
