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
        Schema::create('mutasi_siswa_keluar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->string('sekolah_tujuan');
            $table->date('tanggal');
            $table->string('tahun_ajaran');
            $table->varchar('alasan');
            $table->varchar('dokumen');
            $table->string('status');
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
        Schema::dropIfExists('mutasi_siswa_keluar');
    }
};