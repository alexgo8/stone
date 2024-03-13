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
        Schema::create('stele_base', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('stele_id');
      $table->unsignedBigInteger('base_id');

      $table->index('stele_id');
      $table->index('base_id');

      $table->foreign('stele_id')->on('steles')->references('id');
      $table->foreign('base_id')->on('bases')->references('id');


      $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stele_base');
    }
};
