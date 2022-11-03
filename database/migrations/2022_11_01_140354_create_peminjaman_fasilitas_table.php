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
        Schema::create('peminjaman_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_fasilitas');
            $table->foreignId('id_user');
            $table->date('tanggal_pinjam');
            $table->time('jam_pinjam');
            $table->date('tanggal_tenggat');
            $table->time('jam_tenggat');
            $table->integer('denda_terlambat');
            $table->integer('denda_hilang')->nullable();
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
        Schema::dropIfExists('peminjaman_fasilitas');
    }
};
