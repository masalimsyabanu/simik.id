<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('testimoni', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->enum('status', ['aktif', 'nonaktif'])->nullable();
      $table->timestamps();
    });

    Schema::create('isi-testimoni', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table
        ->foreignId('testimoni_id')
        ->constrained('testimoni')
        ->onDelete('cascade');
      $table->string('gambar')->nullable();
      $table->string('nama_pelanggan')->nullable();
      $table->string('pesan')->nullable();
      $table->timestamps();
    });

    Schema::create('faq', function (Blueprint $table) {
      $table->id();
      $table->json('pertanyaan')->nullable();
      $table->enum('status', ['aktif', 'nonaktif'])->nullable();
      $table->timestamps();
    });

    Schema::create('tentang-kami', function (Blueprint $table) {
      $table->id();
      $table->string('deskripsi')->nullable();
      $table->string('visi')->nullable();
      $table->string('misi')->nullable();
      $table->enum('status', ['aktif', 'nonaktif'])->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('tentang-kami');
    Schema::dropIfExists('faq');
    Schema::dropIfExists('testimoni');
    Schema::dropIfExists('isi-testimoni');
  }
};
