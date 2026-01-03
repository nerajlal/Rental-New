<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('store_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Subdomain
            $table->string('subdomain')->unique()->nullable();
            
            // Theme Settings
            $table->string('theme_name')->default('Jewelry Luxe');
            $table->string('primary_color', 7)->default('#008060');
            $table->string('text_color', 7)->default('#202223');
            $table->string('background_color', 7)->default('#ffffff');
            
            // SEO
            $table->string('homepage_title')->nullable();
            $table->text('homepage_description')->nullable();
            $table->string('google_analytics_id')->nullable();
            $table->string('facebook_pixel_id')->nullable();
            
            // Store Settings
            $table->boolean('password_protected')->default(false);
            $table->boolean('allow_search_indexing')->default(true);
            
            // Custom Domain (future)
            $table->string('custom_domain')->nullable();
            $table->boolean('custom_domain_verified')->default(false);
            
            $table->timestamps();
            
            $table->unique('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('store_settings');
    }
};
