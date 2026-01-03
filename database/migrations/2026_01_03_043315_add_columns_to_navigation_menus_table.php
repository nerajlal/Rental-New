<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('navigation_menus', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id')->constrained()->onDelete('cascade');
            $table->enum('type', ['main', 'footer'])->after('user_id')->default('main');
            $table->json('items')->after('type')->nullable();
            
            $table->unique(['user_id', 'type']);
        });
    }

    public function down(): void
    {
        Schema::table('navigation_menus', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropUnique(['user_id', 'type']);
            $table->dropColumn(['user_id', 'type', 'items']);
        });
    }
};
