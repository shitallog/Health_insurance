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
        Schema::create('features', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('feature_name'); // Name of the feature (e.g., Cashless hospitals, Claims)
            $table->text('description')->nullable(); // Description of the feature
            $table->boolean('is_available')->default(true); // Availability status of the feature
            $table->string('policy_type'); // Type of policy (e.g., Care Health, Care Supreme Direct)
            $table->boolean('is_active')->default(true); // Active status
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
