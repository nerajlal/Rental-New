<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'Store Preview' }}</title>
    <meta name="description" content="{{ $settings->homepage_description ?? '' }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: {{ $settings->primary_color ?? '#D4AF37' }};
            --text-color: {{ $settings->text_color ?? '#1C1B1B' }};
            --bg-color: {{ $settings->background_color ?? '#ffffff' }};
            --secondary-bg: #f8f9fa;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
            line-height: 1.7;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Playfair Display', serif;
            letter-spacing: 0.5px;
        }
        
        .fw-bold { font-weight: 700 !important; }
        
        .btn {
            font-family: 'Inter', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
            border-radius: 0 !important;
            padding: 12px 28px;
            transition: all 0.3s ease;
        }
        
        .btn-primary, .btn-dark, .btn-outline-light {
            background-color: #000;
            border-color: #000;
            color: #fff;
        }
        
        .btn-outline-light {
            background-color: transparent;
            border-color: #fff;
        }

        .btn-primary:hover, .btn-dark:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: #000;
            transform: translateY(-2px);
        }
        
        .btn-outline-dark {
            border-width: 1px;
            border-color: #000;
            color: #000;
        }
        
        .btn-outline-dark:hover {
            background-color: #000;
            color: #fff;
            transform: translateY(-2px);
        }
        
        .text-subdued { color: #666; font-weight: 300; }
        
        /* Utility */
        .group-hover-zoom:hover .bg-cover { transform: scale(1.05); }
        .hover-lift { transition: transform 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); }
        
        section { padding: 4rem 0; }
    </style>
</head>
<body>
    @php
        $customization = $customization ?? null;
        $sectionOrder = $customization->section_order ?? ['header', 'hero', 'featured-products', 'how-it-works', 'cta', 'testimonials', 'footer'];
        $menuItems = $menuItems ?? [];
    @endphp
    
    <div id="theme-sections">
        @foreach($sectionOrder as $sectionType)
            @php
                $sectionData = $customization ? $customization->getSectionData($sectionType) : [];
                $themeName = $customization->theme_name ?? 'jewelry-luxe';
            @endphp
            
            <div data-section-type="{{ $sectionType }}">
                @include("admin-shop.themes.{$themeName}.sections.{$sectionType}", [
                    'data' => $sectionData,
                    'menuItems' => $menuItems,
                    'footerItems' => $footerItems ?? [],
                    'homeUrl' => $homeUrl ?? route('shop.preview-store')
                ])
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Listen for customizer updates
        window.addEventListener('message', function(event) {
            if (event.data.type === 'update-settings') {
                const { section, key, value } = event.data;
                const sectionEl = document.querySelector(`[data-section-type="${section}"]`);
                
                if (sectionEl) {
                    // Find element with data-setting-key
                    const targetEl = sectionEl.querySelector(`[data-setting-key="${key}"]`);
                    
                    if (targetEl) {
                        if (targetEl.tagName === 'IMG') {
                            targetEl.src = value;
                        } else if (key.includes('slide') && key.includes('image')) {
                            // Handle hero slider background image
                            if (value) {
                                targetEl.style.background = `linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('${value}') no-repeat center center`;
                                targetEl.style.backgroundSize = 'cover';
                            } else {
                                targetEl.style.background = `linear-gradient(135deg, #121212 0%, #2d2d2d 100%)`;
                            }
                        } else if (key.includes('cat') && key.includes('image') || key.includes('col') && key.includes('image')) {
                             // Handle collection cards background
                             if (value) {
                                targetEl.style.backgroundImage = `url('${value}')`;
                             }
                        } else if (targetEl.tagName === 'I') {
                             // Handle Icons
                             targetEl.className = `fas ${value} fa-2x mb-3 text-muted`;
                        } else if (targetEl.tagName === 'A' && key.includes('url')) {
                            targetEl.href = value;
                        } else if (key.includes('stars')) {
                            let starsHtml = '';
                            for(let i=0; i<parseInt(value); i++) {
                                starsHtml += '<i class="fas fa-star" style="color: #fbbf24; font-size: 14px;"></i>';
                            }
                            targetEl.innerHTML = starsHtml;
                        } else if (key.includes('color')) {
                             // Handle background color or text color
                            if (key === 'background_color') {
                                // Specific logic for hero section background gradient
                                if(section === 'hero') {
                                     sectionEl.style.background = `linear-gradient(135deg, ${value} 0%, #00a876 100%)`;
                                     const btn = sectionEl.querySelector('.btn');
                                     if(btn) btn.style.color = value;
                                } else {
                                     sectionEl.style.backgroundColor = value;
                                }
                            } else {
                                targetEl.style.color = value;
                            }
                        } else if (key === 'show_search' || key === 'show_ratings' || key === 'show_social' || key === 'autoplay_speed') {
                            // Reload for structural changes (toggles) or carousel settings
                            location.reload();
                        } else if (key === 'products_count') {
                             // Reload for count changes
                             location.reload();
                        } else {
                            // Text updates
                            targetEl.innerText = value;
                        }
                    } else if (key === 'background_color') {
                         // Fallback if no specific target but section bg needs update
                         sectionEl.style.backgroundColor = value;
                    }
                }
            } else if (event.data.type === 'update-order') {
                const newOrder = event.data.order;
                const container = document.getElementById('theme-sections');
                
                newOrder.forEach(type => {
                    const el = document.querySelector(`[data-section-type="${type}"]`);
                    if (el) {
                        container.appendChild(el);
                    }
                });
            } else if (event.data.type === 'toggle-section') {
                const { section, visible } = event.data;
                const el = document.querySelector(`[data-section-type="${section}"]`);
                if (el) {
                    el.style.display = visible ? 'block' : 'none';
                }
            }
        });
    </script>
</body>
</html>
