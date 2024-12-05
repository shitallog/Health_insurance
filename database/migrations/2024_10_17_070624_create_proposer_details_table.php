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
        Schema::create('proposer_details', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('last_name')->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed'])->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('pan_card')->nullable();
            $table->enum('social_status', [
                'BPL_family',
                'physically_disabled',
                'informal_sector',
                'unorganized_sector',
                'none'
            ]);
            $table->date('dob');
            $table->string('occupation');
            $table->integer('height_feet');
            $table->integer('height_inches');
            $table->integer('weight_kg');
            $table->string('flat_number');
            $table->string('colony');
            $table->string('landmark');
            $table->string('city');
            $table->string('state');
            $table->string('pin_code');
            $table->string('email');
            $table->string('mobile');
            $table->string('emergency_mobile');
            $table->string('car_bike_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposer_details');
    }
};
