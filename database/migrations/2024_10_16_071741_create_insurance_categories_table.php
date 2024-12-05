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
        Schema::create('insurance_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Name of the insurance category (Health, Life, etc.)
            $table->text('description')->nullable();  // Optional description for the category
            $table->decimal('discount', 5, 2)->default(0);  // Discount percentage, up to 10%
            $table->string('image')->nullable();  // Path to the category image (for promotions)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_categories');
    }
};
