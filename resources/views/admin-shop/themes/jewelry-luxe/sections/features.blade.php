<section class="py-5 border-top">
    <div class="container">
        @if(!empty($data['heading']))
            <h2 class="text-center mb-5 font-playfair display-6" data-setting-key="heading">{{ $data['heading'] }}</h2>
        @endif
        
        <div class="row g-4 text-center">
            @for($i = 1; $i <= 3; $i++)
                @php
                    $icon = $data["feat{$i}_icon"] ?? 'fa-check';
                    $title = $data["feat{$i}_title"] ?? "Feature $i";
                    $text = $data["feat{$i}_text"] ?? "Description";
                @endphp
                <div class="col-md-4">
                    <div class="p-4">
                        <i class="fas {{ $icon }} fa-2x mb-3 text-muted" data-setting-key="feat{{$i}}_icon"></i>
                        <h4 class="fw-bold mb-2 font-inter" style="font-size: 1.1rem; letter-spacing: 1px; text-transform: uppercase;" data-setting-key="feat{{$i}}_title">{{ $title }}</h4>
                        <p class="text-subdued small mb-0" data-setting-key="feat{{$i}}_text">{{ $text }}</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
