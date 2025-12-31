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
         Schema::create('projections', function (Blueprint $table) {
                   $table->id();
                   $table->date('year');
                   $table->decimal('projectedValue');
                   $table->unsignedBigInteger('estimation_id');
                   $table->unsignedBigInteger('marketScenario_id');
                   $table->timestamps();
                   $table->foreign('estimation_id')->references('id')->on('estimations');
                   $table->foreign('marketScenario_id')->references('id')->on('marketScenario');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projections');
    }
};
