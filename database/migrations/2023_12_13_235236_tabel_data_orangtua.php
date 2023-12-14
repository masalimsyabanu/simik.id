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
        Schema::create('data_orangtua', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_anak');
            $table->string('tgl_lahir_anak');
            $table->string('nama_orangtua');
            $table->string('email');
            $table->string('nomor_hp');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orangtua');
    }
};
