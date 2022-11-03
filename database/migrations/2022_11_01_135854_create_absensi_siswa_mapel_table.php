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
        Schema::create('absensi_siswa_mapel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->foreignId('id_mapel');
            $table->date('tanggal');
            $table->string('status');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('absensi_siswa_mapel');
    }
};
