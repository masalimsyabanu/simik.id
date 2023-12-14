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
        Schema::create('calon_murid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_anak')->nullable();
            $table->string('tgl_lahir_anak')->nullable();
            $table->string('nama_orangtua')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('alamat')->nullable();
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
