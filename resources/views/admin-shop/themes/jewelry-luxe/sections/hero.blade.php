<section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="{{ $data['autoplay_speed'] ?? 5000 }}" style="background-color: #000;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner h-100">
        @for($i = 1; $i <= 3; $i++)
            @php
                $image = $data["slide{$i}_image"] ?? '';
                $heading = $data["slide{$i}_heading"] ?? '';
                $subheading = $data["slide{$i}_subheading"] ?? '';
                $btnText = $data["slide{$i}_btn_text"] ?? '';
                $btnUrl = $data["slide{$i}_btn_url"] ?? '#';
                
                // Fallback gradient if no image
                $bgStyle = $image 
                    ? "background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{$image}') no-repeat center center; background-size: cover;"
                    : "background: linear-gradient(135deg, #121212 0%, #2d2d2d 100%);";
            @endphp
            
            <div class="carousel-item {{ $i === 1 ? 'active' : '' }}" style="height: 600px; min-height: 80vh;">
                <div class="w-100 h-100 d-flex align-items-center justify-content-center text-center text-white" 
                     style="{{ $bgStyle }}"
                     data-setting-key="slide{{$i}}_image">
                    
                    <div class="container px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h1 class="display-3 fw-bold mb-4 font-playfair" 
                                    data-setting-key="slide{{$i}}_heading"
                                    style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                                    {{ $heading }}
                                </h1>
                                
                                <p class="lead mb-5 fs-4 text-light opacity-90" 
                                   data-setting-key="slide{{$i}}_subheading"
                                   style="text-shadow: 0 1px 2px rgba(0,0,0,0.3);">
                                    {{ $subheading }}
                                </p>
                                
                                @if($btnText)
                                    <a href="{{ $btnUrl }}" 
                                       class="btn btn-lg px-5 py-3 rounded-0" 
                                       style="background-color: var(--p-primary); color: #fff; border: none; font-weight: 600; letter-spacing: 1px;"
                                       data-setting-key="slide{{$i}}_btn_text">
                                        {{ $btnText }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<style>
/* Custom Carousel Styles */
.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 6px;
    background-color: rgba(255,255,255,0.5);
    border: none;
    transition: all 0.3s ease;
}
.carousel-indicators button.active {
    background-color: var(--p-primary);
    transform: scale(1.2);
}
.carousel-control-prev, .carousel-control-next {
    width: 5%;
    opacity: 0;
    transition: opacity 0.3s ease;
}
#heroCarousel:hover .carousel-control-prev,
#heroCarousel:hover .carousel-control-next {
    opacity: 0.8;
}
</style>
