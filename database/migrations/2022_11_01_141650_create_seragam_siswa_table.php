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
        Schema::create('seragam_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('seragam'); //biru-putih, pramuka, batik, olahraga, dll
            $table->char('ukuran'); // S,M,L,XL,XXL
            $table->integer('kuantitas');
            $table->integer('harga');
            $table->string('status'); //tersedia, tidak tersedia
            $table->varchar('gambar');
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
        Schema::dropIfExists('seragam_siswa');
    }
};
