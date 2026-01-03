<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('theme_customizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('theme_name')->default('jewelry-luxe');
            $table->json('sections')->nullable(); // Stores all section customizations
            $table->json('section_order')->nullable(); // Order of sections
            $table->boolean('published')->default(false);
            $table->timestamps();
            
            $table->unique('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('theme_customizations');
    }
};
