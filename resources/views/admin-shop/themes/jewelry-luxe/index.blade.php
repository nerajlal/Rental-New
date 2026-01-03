<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->homepage_title ?? 'Store Preview' }}</title>
    <meta name="description" content="{{ $settings->homepage_description ?? '' }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: {{ $settings->primary_color ?? '#008060' }};
            --text-color: {{ $settings->text_color ?? '#202223' }};
            --bg-color: {{ $settings->background_color ?? '#ffffff' }};
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "San Francisco", "Segoe UI", Roboto, sans-serif;
            color: var(--text-color);
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
        }
        
        .text-subdued {
            color: #6d7175;
        }
    </style>
</head>
<body>
    @php
        $customization = $customization ?? null;
        $sectionOrder = $customization->section_order ?? ['header', 'hero', 'featured-products', 'testimonials', 'footer'];
        $menuItems = $menuItems ?? [];
    @endphp
    
    @foreach($sectionOrder as $sectionType)
        @php
            $sectionData = $customization ? $customization->getSectionData($sectionType) : [];
        @endphp
        
        <div data-section-type="{{ $sectionType }}">
            @include("admin-shop.themes.{$customization->theme_name ?? 'jewelry-luxe'}.sections.{$sectionType}", [
                'data' => $sectionData,
                'menuItems' => $menuItems
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
