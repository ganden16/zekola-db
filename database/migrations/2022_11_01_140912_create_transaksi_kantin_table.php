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
        Schema::create('transaksi_kantin', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bayar');
            $table->foreignId('id_menu_kantin');
            $table->foreignId('id_user')->nullable();
            $table->integer('kuantitas');
            $table->string('status'); //dibayar, belum bayar, batal
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
        Schema::dropIfExists('transaksi_kantin');
    }
};
