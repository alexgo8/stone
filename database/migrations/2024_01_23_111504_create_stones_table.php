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
    Schema::create('stones', function (Blueprint $table) {
      $table->id();
      $table->string('titel');
      $table->text('description');
      $table->timestamps();
      $table->softDeletes();

      $table->unsignedBigInteger('category_id')->nullable();

      $table->index('category_id', 'stone_category_idx');

      $table->foreign('category_id', 'stone_category_fk')->on('stones')->references('id'); //связь один ко многим много камней из таблицы stone, ссылаются на категорию из таблицы categories
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('stones');
  }
};
