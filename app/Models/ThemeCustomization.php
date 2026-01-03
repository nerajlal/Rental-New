<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeCustomization extends Model
{
    protected $fillable = [
        'user_id',
        'theme_name',
        'sections',
        'section_order',
        'published',
    ];

    protected $casts = [
        'sections' => 'array',
        'section_order' => 'array',
        'published' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getSectionData($sectionType)
    {
        return $this->sections[$sectionType] ?? $this->getDefaultSectionData($sectionType);
    }
    
    private function getDefaultSectionData($sectionType)
    {
        $defaults = [
            'header' => [
                'logo_text' => auth()->user()->name ?? 'Your Store',
                'show_search' => true,
            ],
            'hero' => [
                'heading' => 'Premium Jewelry on Rent',
                'subheading' => 'Exquisite designs for your special occasions',
                'button_text' => 'Shop Now',
                'button_url' => '/shop',
                'background_color' => '#008060',
            ],
            'featured-products' => [
                'heading' => 'Featured Collection',
                'subheading' => 'Discover our most popular jewelry pieces',
                'products_count' => 4,
            ],
            'testimonials' => [
                'heading' => 'What Our Customers Say',
                'show_ratings' => true,
            ],
            'footer' => [
                'copyright_text' => '© 2026 All rights reserved',
                'show_social' => true,
            ],
        ];
        
        return $defaults[$sectionType] ?? [];
    }
}
