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
            $table->longText('image')->nullable(false);
            $table->string('title', 74)->nullable(false);
            $table->string('description', 199)->nullable(false);
            $table->string('client', 74)->nullable(false);
            $table->json('technology')->nullable(false);
            $table->boolean('is_desktop')->nullable(false);
            $table->foreignId('project_category_id')->constrained('project_categories')->cascadeOnDelete();
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
