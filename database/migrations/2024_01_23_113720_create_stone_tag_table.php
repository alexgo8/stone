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
    Schema::create('stone_tag', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('stone_id');
      $table->unsignedBigInteger('tag_id');

      $table->index('stone_id', 'stone_tag_stone_idx');
      $table->index('tag_id', 'stone_tag_tag_idx');

      $table->foreign('stone_id', 'stone_tag_note_fk')->on('stones')->references('id');
      $table->foreign('tag_id', 'stone_tag_tag_fk')->on('tags')->references('id');


      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('stone_tag');
  }
};
