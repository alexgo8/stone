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
    Schema::create('stele_tag', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('stele_id');
      $table->unsignedBigInteger('tag_id');

      $table->index('stele_id', 'stele_tag_stele_idx');
      $table->index('tag_id', 'stele_tag_tag_idx');

      $table->foreign('stele_id', 'stele_tag_note_fk')->on('steles')->references('id');
      $table->foreign('tag_id', 'stele_tag_tag_fk')->on('tags')->references('id');


      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stele_tag');
    }
};
