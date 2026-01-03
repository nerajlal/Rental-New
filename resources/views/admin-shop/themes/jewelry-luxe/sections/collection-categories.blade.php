<section class="py-5" style="background-color: {{ $data['background_color'] ?? 'var(--bg-color)' }}">
    <div class="container">
        @if(!empty($data['heading']))
            <h2 class="text-center mb-5 font-playfair display-5" data-setting-key="heading">{{ $data['heading'] }}</h2>
        @endif
        
        <div class="row g-4">
            @for($i = 1; $i <= 3; $i++)
                @php
                    $img = $data["cat{$i}_image"] ?? '';
                    $title = $data["cat{$i}_title"] ?? "Category $i";
                    $url = $data["cat{$i}_url"] ?? '#';
                @endphp
                <div class="col-md-4">
                    <a href="{{ $url }}" class="text-decoration-none group-hover-zoom d-block h-100 position-relative overflow-hidden" 
                       style="min-height: 400px; border-radius: 8px;">
                        @if($img)
                            <div class="position-absolute w-100 h-100 bg-cover" 
                                 style="background-image: url('{{ $img }}'); background-size: cover; background-position: center; transition: transform 0.5s ease;"
                                 data-setting-key="cat{{$i}}_image"></div>
                        @else
                            <div class="position-absolute w-100 h-100 bg-secondary d-flex align-items-center justify-content-center">
                                <i class="fas fa-image fa-3x text-white opacity-50"></i>
                            </div>
                        @endif
                        <div class="position-absolute w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 text-center">
                            <h3 class="text-white fw-bold letter-spacing-2 mb-0" data-setting-key="cat{{$i}}_title">{{ $title }}</h3>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
</section>

<style>
.group-hover-zoom:hover .bg-cover {
    transform: scale(1.05);
}
.letter-spacing-2 { letter-spacing: 2px; }
</style>
