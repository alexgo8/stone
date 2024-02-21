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
    Schema::create('portrait-engravings', function (Blueprint $table) {
      $table->id();      
      $table->string('size');
      $table->integer('price');      
      $table->unsignedBigInteger('material_id');
      $table->string('method_id');
      $table->unsignedBigInteger('size_height')->nullable();
      $table->unsignedBigInteger('size_width')->nullable();

      $table->softDeletes();
      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('portrait-engravings');
    }
};
