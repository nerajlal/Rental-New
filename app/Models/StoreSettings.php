<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreSettings extends Model
{
    protected $fillable = [
        'user_id',
        'subdomain',
        'theme_name',
        'primary_color',
        'text_color',
        'background_color',
        'homepage_title',
        'homepage_description',
        'google_analytics_id',
        'facebook_pixel_id',
        'password_protected',
        'allow_search_indexing',
        'custom_domain',
        'custom_domain_verified',
    ];

    protected $casts = [
        'password_protected' => 'boolean',
        'allow_search_indexing' => 'boolean',
        'custom_domain_verified' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getFullSubdomainAttribute()
    {
        return $this->subdomain ? $this->subdomain . '.metora.in' : null;
    }
}
