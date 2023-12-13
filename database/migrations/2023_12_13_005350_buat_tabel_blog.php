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
    Schema::create('kategori_blog', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nama')->nullable();
      $table->string('keterangan')->nullable();
      $table->integer('count')->default(0);
      $table->timestamps();
    });

    Schema::create('blog', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('judul')->nullable();
      $table->text('abstrak')->nullable();
      $table->longtext('konten')->nullable();
      $table->string('penulis')->nullable();
      $table->unsignedInteger('kategori_id')->nullable();
      $table
        ->foreign('kategori_id')
        ->references('id')
        ->on('kategori_blog');
      $table->string('foto')->nullable();
      $table->string('thumbnail')->nullable();
      $table->string('keyword')->nullable();
      $table->string('slug')->nullable();
      $table->enum('status', ['aktif', 'nonaktif'])->default('nonaktif');
      $table->timestamps();
      $table->index(['status', 'created_at']);
    });

    Schema::create('komentar', function (Blueprint $table) {
      $table->increments('id');
      $table->string('komentar')->nullable();
      $table->foreignId('user_id')->constrained('users');
      $table->foreignId('blog_id')->constrained('blog');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('blog');
    Schema::dropIfExists('kategori_blog');
    Schema::dropIfExists('komentar');
  }
};
