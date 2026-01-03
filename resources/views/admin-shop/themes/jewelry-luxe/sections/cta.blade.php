@php
    $data = $data ?? [];
    $heading = $data['heading'] ?? 'Join our Exclusive Club';
    $text = $data['text'] ?? 'Subscribe to get 20% off your first rental.';
    $btnText = $data['button_text'] ?? 'Subscribe';
    $btnUrl = $data['button_url'] ?? '#';
    $bgColor = $data['background_color'] ?? '#f8f9fa';
@endphp

<section class="py-5" style="background-color: {{ $bgColor }};">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3" data-setting-key="heading">{{ $heading }}</h2>
                <p class="lead mb-4" data-setting-key="text">{{ $text }}</p>
                <a href="{{ $btnUrl }}" class="btn btn-dark btn-lg px-5" style="background: var(--primary-color); border: none;" data-setting-key="button_text">
                    {{ $btnText }}
                </a>
            </div>
        </div>
    </div>
</section>
