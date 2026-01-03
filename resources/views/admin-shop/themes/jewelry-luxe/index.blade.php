<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'Store Preview' }}</title>
    <meta name="description" content="{{ $settings->homepage_description ?? '' }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: {{ $settings->primary_color ?? '#D4AF37' }};
            --text-color: {{ $settings->text_color ?? '#1C1B1B' }};
            --bg-color: {{ $settings->background_color ?? '#ffffff' }};
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Playfair Display', serif;
        }
        
        .fw-bold {
            font-weight: 700 !important;
        }

        .btn {
            font-family: 'Inter', sans-serif;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 500;
        }
        
        .text-subdued {
            color: #6d7175;
        }
    </style>
</head>
<body>
    @php
        $customization = $customization ?? null;
        $sectionOrder = $customization->section_order ?? ['header', 'hero', 'featured-products', 'how-it-works', 'cta', 'testimonials', 'footer'];
        $menuItems = $menuItems ?? [];
    @endphp
    
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
                        } else if (targetEl.tagName === 'A' && key.includes('url')) {
                            targetEl.href = value;
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
                        } else if (key === 'show_search' || key === 'show_ratings' || key === 'show_social') {
                            // Reload for structural changes (toggles)
                            location.reload();
                        } else if (key === 'products_count') {
                             // Reload for count changes
                             location.reload();
                        } else {
                            // Text updates
                            targetEl.innerText = value;
                        }
                    } else if (key === 'show_search' || key === 'show_ratings' || key === 'show_social' || key === 'products_count') {
                        // Fallback reload if element not found but it's a structural setting
                         location.reload();
                    }
                }
            }
        });
    </script>
</body>
</html>
