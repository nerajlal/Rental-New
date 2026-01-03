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
            $sectionData['menuItems'] = $menuItems; // Pass menu to all sections
        @endphp
        
        @include("admin-shop.themes.{$customization->theme_name ?? 'jewelry-luxe'}.sections.{$sectionType}", ['data' => $sectionData])
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Listen for customizer updates
        window.addEventListener('message', function(event) {
            if (event.data.type === 'update-section') {
                // Reload the page to show updates
                location.reload();
            }
        });
    </script>
</body>
</html>
