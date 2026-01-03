@php
    $data = $data ?? [];
    $copyrightText = $data['copyright_text'] ?? '© 2026 All rights reserved';
    $showSocial = $data['show_social'] ?? true;
@endphp

<footer class="theme-footer" style="background: #f9fafb; padding: 40px 0 20px; margin-top: 80px;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="fw-bold mb-3" style="color: var(--primary-color, #008060);">
                    <i class="fas fa-gem me-2"></i>{{ auth()->user()->name ?? 'Your Store' }}
                </h5>
                <p class="text-subdued small">
                    Premium jewelry rental service for all your special occasions.
                </p>
            </div>
            <div class="col-md-4">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    @forelse($footerItems ?? [] as $item)
                        <li class="mb-2"><a href="{{ $item['url'] }}" class="text-decoration-none text-subdued">{{ $item['label'] }}</a></li>
                    @empty
                        <li class="mb-2"><a href="{{ route('shop.site.about') }}" class="text-decoration-none text-subdued">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('shop.site.contact') }}" class="text-decoration-none text-subdued">Contact</a></li>
                        <li class="mb-2"><a href="{{ route('shop.site.privacy') }}" class="text-decoration-none text-subdued">Privacy Policy</a></li>
                    @endforelse
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="fw-bold mb-3">Contact</h6>
                <p class="text-subdued small mb-2">
                    <i class="fas fa-envelope me-2"></i>info@yourstore.com
                </p>
                <p class="text-subdued small mb-3">
                    <i class="fas fa-phone me-2"></i>+1 234 567 8900
                </p>
                @if($showSocial)
                    <div class="social-links mt-3">
                        <a href="#" class="text-subdued me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-subdued me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-subdued me-3"><i class="fab fa-pinterest fa-lg"></i></a>
                    </div>
                @endif
            </div>
        </div>
        <hr class="my-4" style="border-color: #e1e3e5;">
        <div class="text-center">
            <p class="text-muted small mb-0" data-setting-key="copyright_text">{{ $copyrightText }}</p>
        </div>
    </div>
</footer>

<style>
.theme-footer a:hover {
    color: var(--primary-color, #008060) !important;
}
.social-links a:hover {
    transform: translateY(-2px);
    transition: transform 0.2s;
}
</style>
