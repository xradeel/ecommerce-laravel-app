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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 5, 2)->nullable();
            $table->text('short_description')->default('null');
            $table->text('long_description')->default('null');
            $table->text('size')->default('null');
            $table->text('color')->default('null');
            $table->boolean('availability')->default(true);
            $table->boolean('featured')->default(true);
            $table->boolean('popular')->default(true);
            $table->string('thumbnail1')->nullable();
            $table->string('thumbnail2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
