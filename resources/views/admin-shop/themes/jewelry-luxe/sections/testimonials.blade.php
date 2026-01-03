@php
    $data = $data ?? [];
    $heading = $data['heading'] ?? 'What Our Customers Say';
    $showRatings = $data['show_ratings'] ?? true;
    
    // Sample testimonials
    $testimonials = [
        ['name' => 'Priya Sharma', 'text' => 'Absolutely stunning jewelry! Made my wedding day extra special. The quality is exceptional and the rental process was so smooth.', 'rating' => 5],
        ['name' => 'Anjali Patel', 'text' => 'Beautiful collection and amazing service. I rented bridal jewelry for my sister\'s wedding and everyone loved it!', 'rating' => 5],
        ['name' => 'Meera Reddy', 'text' => 'Highly recommend! The jewelry pieces are exquisite and the team is very professional and helpful.', 'rating' => 5],
    ];
@endphp

<section class="testimonials-section py-5" style="background: #f9fafb;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">{{ $heading }}</h2>
        </div>
        
        <div class="row g-4">
            @foreach($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="testimonial-card" style="background: white; border-radius: 8px; padding: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                        @if($showRatings)
                            <div class="mb-3">
                                @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <i class="fas fa-star" style="color: #fbbf24; font-size: 14px;"></i>
                                @endfor
                            </div>
                        @endif
                        <p class="mb-4" style="font-style: italic; color: #6d7175;">
                            "{{ $testimonial['text'] }}"
                        </p>
                        <div class="fw-semibold" style="color: var(--primary-color, #008060);">
                            {{ $testimonial['name'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
