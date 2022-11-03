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
        Schema::create('transaksi_administrasi_lain', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->string('jenis'); //jenis transaksi (uang gedung, study tour, ujian, dll)
            $table->date('tanggal');
            $table->integer('nominal');
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
        Schema::dropIfExists('transaksi_administrasi_lain');
    }
};
