<section class="py-5">
    <div class="container">
        @if(!empty($data['heading']))
            <h2 class="text-center mb-5 font-playfair display-5" data-setting-key="heading">{{ $data['heading'] }}</h2>
        @endif
        
        <div class="row g-4">
            @for($i = 1; $i <= 2; $i++)
                @php
                    $img = $data["col{$i}_image"] ?? '';
                    $title = $data["col{$i}_title"] ?? ($i==1 ? 'FOR HIM' : 'FOR HER');
                    $url = $data["col{$i}_url"] ?? '#';
                @endphp
                <div class="col-md-6">
                    <a href="{{ $url }}" class="text-decoration-none d-block position-relative overflow-hidden group-hover-zoom" 
                       style="height: 500px; border-radius: 4px;">
                        @if($img)
                            <div class="position-absolute w-100 h-100 bg-cover" 
                                 style="background-image: url('{{ $img }}'); background-size: cover; background-position: center; transition: transform 0.6s ease;"
                                 data-setting-key="col{{$i}}_image"></div>
                        @else
                            <div class="position-absolute w-100 h-100 bg-dark d-flex align-items-center justify-content-center">
                                <span class="text-white-50">Image Placeholder</span>
                            </div>
                        @endif
                        
                        <!-- Overlay Text -->
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                            <h3 class="text-white fw-bold display-4" 
                                style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); letter-spacing: 3px;"
                                data-setting-key="col{{$i}}_title">{{ $title }}</h3>
                                
                            <span class="btn btn-outline-light rounded-0 mt-3 px-4 py-2" style="border-width: 2px; font-weight: 600;">SHOP NOW</span>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
</section>
