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
        Schema::create('transaksi_buku_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bayar');
            $table->foreignId('id_buku_siswa');
            $table->foreignId('id_siswa');
            $table->integer('kuantitas'); //bisa beli lebih dari 1
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
        Schema::dropIfExists('transaksi_buku_siswa');
    }
};
