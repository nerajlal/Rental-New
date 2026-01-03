@php
    $data = $data ?? [];
    $heading = $data['heading'] ?? 'What Our Customers Say';
    $showRatings = $data['show_ratings'] ?? true;
    
    // Sample testimonials with dynamic keys
    $testimonials = [
        [
            'name' => $data['t1_name'] ?? 'Priya Sharma',
            'name_key' => 't1_name',
            'text' => $data['t1_text'] ?? 'Absolutely stunning jewelry! Made my wedding day extra special.',
            'text_key' => 't1_text',
            'stars' => $data['t1_stars'] ?? 5,
            'stars_key' => 't1_stars'
        ],
        [
            'name' => $data['t2_name'] ?? 'Anjali Patel',
            'name_key' => 't2_name',
            'text' => $data['t2_text'] ?? "Beautiful collection and amazing service. I rented bridal jewelry for my sister's wedding.",
            'text_key' => 't2_text',
            'stars' => $data['t2_stars'] ?? 5,
            'stars_key' => 't2_stars'
        ],
        [
            'name' => $data['t3_name'] ?? 'Meera Reddy',
            'name_key' => 't3_name',
            'text' => $data['t3_text'] ?? 'Highly recommend! The jewelry pieces are exquisite and the team is very professional.',
            'text_key' => 't3_text',
            'stars' => $data['t3_stars'] ?? 5,
            'stars_key' => 't3_stars'
        ],
    ];
@endphp

<section class="testimonials-section py-5" style="background: #f9fafb;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-setting-key="heading">{{ $heading }}</h2>
        </div>
        
        <div class="row g-4">
            @foreach($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="testimonial-card" style="background: white; border-radius: 8px; padding: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                        @if($showRatings)
                            <div class="mb-3" data-setting-key="{{ $testimonial['stars_key'] }}">
                                @for($i = 0; $i < $testimonial['stars']; $i++)
                                    <i class="fas fa-star" style="color: #fbbf24; font-size: 14px;"></i>
                                @endfor
                            </div>
                        @endif
                        <p class="mb-4" style="font-style: italic; color: #6d7175;">
                            "<span data-setting-key="{{ $testimonial['text_key'] }}">{{ $testimonial['text'] }}</span>"
                        </p>
                        <div class="fw-semibold" style="color: var(--primary-color, #008060);" data-setting-key="{{ $testimonial['name_key'] }}">
                            {{ $testimonial['name'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
