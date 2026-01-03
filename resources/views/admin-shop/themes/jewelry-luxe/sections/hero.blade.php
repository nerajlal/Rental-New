@php
    $data = $data ?? [];
    $heading = $data['heading'] ?? 'Premium Jewelry on Rent';
    $subheading = $data['subheading'] ?? 'Exquisite designs for your special occasions';
    $buttonText = $data['button_text'] ?? 'Shop Now';
    $buttonUrl = $data['button_url'] ?? '/shop';
    $bgColor = $data['background_color'] ?? '#008060';
@endphp

<section class="hero-section" style="background: linear-gradient(135deg, {{ $bgColor }} 0%, #00a876 100%); color: white; padding: 80px 0; text-align: center;">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4" style="font-size: 48px;" data-setting-key="heading">{{ $heading }}</h1>
        <p class="lead mb-4" style="font-size: 20px; opacity: 0.95; max-width: 600px; margin: 0 auto 30px;" data-setting-key="subheading">
            {{ $subheading }}
        </p>
        <a href="{{ $buttonUrl }}" class="btn btn-lg" style="background: white; color: {{ $bgColor }}; border: none; padding: 12px 32px; font-weight: 600; border-radius: 6px; text-decoration: none; display: inline-block;" data-setting-key="button_text">
            {{ $buttonText }}
        </a>
    </div>
</section>

<style>
.hero-section .btn:hover {
    background: #f0f0f0 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transition: all 0.3s;
}
</style>
