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
        Schema::create('insurance_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Name of the insurance product
            $table->text('description')->nullable();  // Optional description for the product
            $table->decimal('monthly_price', 10, 2);  // Monthly price of the insurance product
            $table->decimal('annual_price', 10, 2);   // Annual price of the insurance product
            $table->decimal('price', 10, 2);  // Monthly price of the insurance product
            $table->foreignId('category_id')->constrained('insurance_categories')->onDelete('cascade');  // Foreign key to insurance_categories
            $table->string('product_code')->unique();  // Unique product code for the insurance product
            $table->string('image')->nullable();  // Path to the product image
            $table->decimal('cover_amount', 10, 2); // Cover amount (e.g., ₹7 Lakh)
            $table->integer('cashless_hospitals'); // Number of cashless hospitals
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_products');
    }
};
