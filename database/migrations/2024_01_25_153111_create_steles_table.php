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
    Schema::create('steles', function (Blueprint $table) {
      $table->id();
      $table->string('size');
      $table->integer('price');
      $table->unsignedBigInteger('material_id')->nullable();
      $table->unsignedBigInteger('rotation_id')->nullable();
      $table->unsignedBigInteger('installation_id')->nullable();
      $table->unsignedBigInteger('portrait_id')->nullable();
      $table->unsignedBigInteger('name_id')->nullable();
      $table->unsignedBigInteger('size_height')->nullable();
      $table->unsignedBigInteger('size_width')->nullable();
      $table->unsignedBigInteger('size_thickness')->nullable();


      $table->softDeletes();
      $table->timestamps();

      $table->index('material_id', 'stele_material_idx');
      $table->foreign('material_id', 'stele_material_fk')->on('steles')->references('id'); //связь один ко многим много стел из таблицы steles, ссылаются на категорию из таблицы materials
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('steles');
  }
};
