<x-front-layout>
    <section class="hero-section pb-5">
        <div class="container">
             <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="display-4 serif-font mb-3">Simple, Transparent Pricing</h1>
                <p class="lead text-muted max-w-2xl mx-auto">Start for free, upgrade as you grow. No hidden fees.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <!-- Starter Plan -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="card-body">
                            <h5 class="text-muted fw-bold mb-3">Starter</h5>
                            <h2 class="display-5 fw-bold mb-4">₹0 <span class="fs-6 text-muted fw-normal">/mo</span></h2>
                            <p class="text-muted mb-4">Perfect for small boutiques just starting out.</p>
                            
                            <ul class="list-unstyled text-start mb-5 mx-auto" style="max-width: 250px;">
                                <li class="mb-3">✓ Up to 10 Products</li>
                                <li class="mb-3">✓ Basic Analytics</li>
                                <li class="mb-3">✓ 5% Transaction Fee</li>
                                <li class="text-muted">✗ Custom Domain</li>
                            </ul>
                            
                            <a href="{{ route('register') }}" class="btn btn-outline-dark rounded-pill w-100 py-2">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Growth Plan -->
                 <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-warning border-2 shadow rounded-4 p-4 text-center position-relative overflow-hidden">
                        <div class="bg-warning text-dark fw-bold small py-1 px-4 position-absolute top-0 end-0 rounded-bottom-start">POPULAR</div>
                        <div class="card-body">
                            <h5 class="text-warning fw-bold mb-3">Growth</h5>
                            <h2 class="display-5 fw-bold mb-4">₹1,499 <span class="fs-6 text-muted fw-normal">/mo</span></h2>
                            <p class="text-muted mb-4">For expanding businesses needing more power.</p>
                            
                            <ul class="list-unstyled text-start mb-5 mx-auto" style="max-width: 250px;">
                                <li class="mb-3">✓ Up to 100 Products</li>
                                <li class="mb-3">✓ Advanced Analytics</li>
                                <li class="mb-3">✓ 2% Transaction Fee</li>
                                <li class="mb-3">✓ Priority Support</li>
                            </ul>
                            
                            <a href="{{ route('register') }}" class="btn btn-warning text-dark fw-bold rounded-pill w-100 py-2">Start Free Trial</a>
                        </div>
                    </div>
                </div>

                <!-- Scale Plan -->
                 <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center">
                        <div class="card-body">
                            <h5 class="text-muted fw-bold mb-3">Scale</h5>
                            <h2 class="display-5 fw-bold mb-4">₹4,999 <span class="fs-6 text-muted fw-normal">/mo</span></h2>
                            <p class="text-muted mb-4">Unlimited power for established rental brands.</p>
                            
                            <ul class="list-unstyled text-start mb-5 mx-auto" style="max-width: 250px;">
                                <li class="mb-3">✓ Unlimited Products</li>
                                <li class="mb-3">✓ Custom Reporting</li>
                                <li class="mb-3">✓ 1% Transaction Fee</li>
                                <li class="mb-3">✓ Dedicated Account Manager</li>
                            </ul>
                            
                            <a href="{{ route('register') }}" class="btn btn-outline-dark rounded-pill w-100 py-2">Contact Sales</a>
                        </div>
                    </div>
                </div>

            </div>
             
             <div class="text-center mt-5">
                 <p class="text-muted">Questions? <a href="#" class="text-dark fw-bold text-decoration-none">Talk to our team</a></p>
             </div>
        </div>
    </section>
</x-front-layout>
