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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
//            $table->string('content');
            $table->string('main_image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignID('category_id')->constrained('categories')->cascadeOnDelete();

            //foreignId('category_id') — создаёт unsignedBigInteger('category_id').
            //constrained('categories') — автоматически создаёт внешний ключ на categories.id.
            //cascadeOnDelete() — аналог onDelete('cascade').
            //index('post_category_idx') — явно создаёт индекс с нужным именем.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
