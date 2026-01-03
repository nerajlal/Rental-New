@php
    $data = $data ?? [];
    $heading = $data['heading'] ?? 'How It Works';
    $step1Title = $data['step1_title'] ?? 'Choose';
    $step1Desc = $data['step1_desc'] ?? 'Browse our exclusive collection and pick your favorite.';
    $step2Title = $data['step2_title'] ?? 'Rent';
    $step2Desc = $data['step2_desc'] ?? 'Book for your dates and get it delivered to your doorstep.';
    $step3Title = $data['step3_title'] ?? 'Return';
    $step3Desc = $data['step3_desc'] ?? 'Look stunning! Then simply pack and return.';
@endphp

<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-setting-key="heading">{{ $heading }}</h2>
        </div>
        
        <div class="row g-4 text-center">
            <!-- Step 1 -->
            <div class="col-md-4">
                <div class="p-4">
                    <div class="mb-3 text-primary" style="font-size: 40px; color: var(--primary-color);">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h4 class="fw-bold mb-3" data-setting-key="step1_title">{{ $step1Title }}</h4>
                    <p class="text-muted" data-setting-key="step1_desc">{{ $step1Desc }}</p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-md-4">
                <div class="p-4">
                    <div class="mb-3 text-primary" style="font-size: 40px; color: var(--primary-color);">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h4 class="fw-bold mb-3" data-setting-key="step2_title">{{ $step2Title }}</h4>
                    <p class="text-muted" data-setting-key="step2_desc">{{ $step2Desc }}</p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-md-4">
                <div class="p-4">
                    <div class="mb-3 text-primary" style="font-size: 40px; color: var(--primary-color);">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h4 class="fw-bold mb-3" data-setting-key="step3_title">{{ $step3Title }}</h4>
                    <p class="text-muted" data-setting-key="step3_desc">{{ $step3Desc }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
