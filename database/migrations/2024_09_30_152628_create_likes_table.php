<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users, cascade on delete
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade'); // Foreign key to posts, cascade on delete
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
