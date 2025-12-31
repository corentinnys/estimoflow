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
        Schema::create('properties_has_features', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('properties_id');
            $table->unsignedBigInteger('features_id');

            $table->timestamps();

             $table->foreign('properties_id')->references('id')->on('properties');
             $table->foreign('features_id')->references('id')->on('features');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_has_features');
    }
};
