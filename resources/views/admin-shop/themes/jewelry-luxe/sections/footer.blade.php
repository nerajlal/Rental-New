@php
    $data = $data ?? [];
    $description = $data['description'] ?? 'Premium jewelry rental service for all your special occasions.';
    $email = $data['email'] ?? 'info@yourstore.com';
    $phone = $data['phone'] ?? '+1 234 567 8900';
    $facebookUrl = $data['facebook_url'] ?? '#';
    $instagramUrl = $data['instagram_url'] ?? '#';
    $pinterestUrl = $data['pinterest_url'] ?? '#';
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
                <p class="text-subdued small" data-setting-key="description">
                    {{ $description }}
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
                    <i class="fas fa-envelope me-2"></i><span data-setting-key="email">{{ $email }}</span>
                </p>
                <p class="text-subdued small mb-3">
                    <i class="fas fa-phone me-2"></i><span data-setting-key="phone">{{ $phone }}</span>
                </p>
                @if($showSocial)
                    <div class="social-links mt-3">
                        <a href="{{ $facebookUrl }}" class="text-subdued me-3" data-setting-key="facebook_url"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="{{ $instagramUrl }}" class="text-subdued me-3" data-setting-key="instagram_url"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="{{ $pinterestUrl }}" class="text-subdued me-3" data-setting-key="pinterest_url"><i class="fab fa-pinterest fa-lg"></i></a>
                    </div>
                @endif
            </div>
        </div>
        <hr class="my-4" style="border-color: #e1e3e5;">
        <div class="text-center">
            <p class="text-muted small mb-2">&copy; {{ date('Y') }} All rights reserved</p>
            <p class="small mb-0">
                <a href="https://metora.in/saas" target="_blank" class="text-decoration-none text-muted" style="font-size: 11px; opacity: 0.7;">
                    <i class="fas fa-code me-1"></i>Developed and maintained by <strong>Metora</strong>
                </a>
            </p>
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
