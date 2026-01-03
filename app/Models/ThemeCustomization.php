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
        $saved = $this->sections[$sectionType] ?? [];
        $defaults = $this->getDefaultSectionData($sectionType);
        
        return array_merge($defaults, $saved);
    }

    private function getDefaultSectionData($sectionType)
    {
        $defaults = [
            'header' => [
                'logo_text' => auth()->user()->name ?? 'Your Store',
                'show_search' => true,
                'is_visible' => true,
            ],
            'hero' => [
                'autoplay_speed' => 5000,
                'slide1_image' => '',
                'slide1_heading' => 'Premium Jewelry on Rent',
                'slide1_subheading' => 'Exquisite designs for your special occasions',
                'slide1_btn_text' => 'Shop Now',
                'slide1_btn_url' => '/shop',
                'slide2_image' => '',
                'slide2_heading' => 'Bridal Collection',
                'slide2_subheading' => 'Make your wedding day unforgettable',
                'slide2_btn_text' => 'View Collection',
                'slide2_btn_url' => '/shop/collection/bridal',
                'slide3_image' => '',
                'slide3_heading' => 'Diamond Sets',
                'slide3_subheading' => 'Sparkle like a star with our real diamond sets',
                'slide3_btn_text' => 'Rent Now',
                'slide3_btn_url' => '/shop/collection/diamond',
                'is_visible' => true,
            ],
            'featured-products' => [
                'heading' => 'Featured Collection',
                'subheading' => 'Discover our most popular jewelry pieces',
                'products_count' => 4,
                'is_visible' => true,
            ],
            'testimonials' => [
                'heading' => 'What Our Customers Say',
                'show_ratings' => true,
                't1_name' => 'Priya Sharma',
                't1_text' => 'Absolutely stunning jewelry! Made my wedding day extra special.',
                't1_stars' => 5,
                't2_name' => 'Anjali Patel',
                't2_text' => "Beautiful collection and amazing service. I rented bridal jewelry for my sister's wedding.",
                't2_stars' => 5,
                't3_name' => 'Meera Reddy',
                't3_text' => 'Highly recommend! The jewelry pieces are exquisite and the team is very professional.',
                't3_stars' => 5,
                'is_visible' => true,
            ],
            'how-it-works' => [
                'heading' => 'How It Works',
                'step1_title' => 'Choose',
                'step1_desc' => 'Browse our exclusive collection and pick your favorite.',
                'step2_title' => 'Rent',
                'step2_desc' => 'Book for your dates and get it delivered to your doorstep.',
                'step3_title' => 'Return',
                'step3_desc' => 'Look stunning! Then simply pack and return.',
                'is_visible' => true,
            ],
            'cta' => [
                'heading' => 'Join our Exclusive Club',
                'text' => 'Subscribe to get 20% off your first rental.',
                'button_text' => 'Subscribe',
                'button_url' => '#',
                'background_color' => '#f8f9fa',
                'is_visible' => true,
            ],
            'footer' => [
                'description' => 'Premium jewelry rental service for all your special occasions.',
                'email' => 'info@yourstore.com',
                'phone' => '+1 234 567 8900',
                'facebook_url' => '#',
                'instagram_url' => '#',
                'pinterest_url' => '#',
                'show_social' => true,
                'is_visible' => true,
            ],
        ];
        
        return $defaults[$sectionType] ?? [];
    }
}
