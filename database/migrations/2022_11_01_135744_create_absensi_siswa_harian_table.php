<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_siswa_harian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->date('tanggal');
            $table->string('status');
            $table->string('keterangan')->nullable();
            $table->string('gambar')->nullable();
            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_siswa_harian');
    }
};
