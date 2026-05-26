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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('num');
            $table->string('title');
            $table->string('category');
            $table->string('year')->nullable();
            $table->string('role')->nullable();
            $table->text('description');
            $table->json('tech')->nullable();
            $table->json('challenges')->nullable();
            $table->json('outcomes')->nullable();
            $table->boolean('featured')->default(false);
            $table->string('live_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('mockup_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
