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
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
    $table->string('name');
    $table->foreignId('category_id')->constrained('insurance_categories')->onDelete('cascade');  // Foreign key to insurance_categories
    $table->unsignedBigInteger('insurer_id');
    $table->decimal('premium', 10, 2);
    $table->integer('coverage'); // sum assured or coverage amount
    $table->text('description');
    $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policies');
    }
};
