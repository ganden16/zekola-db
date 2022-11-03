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
        Schema::create('penilaian_pembelajaran_ekstra', function (Blueprint $table) {
            $table->id();
            $table->string('nama_nilai'); //uts, uas, tugas1, tugas2, keterampilan, sikap
            $table->foreignId('id_ekstra');
            $table->foreignId('id_siswa');
            $table->varchar('nilai'); //80, 90, A, B, C, D, E
            $table->date('tanggal');
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
        Schema::dropIfExists('penilaian_pembelajaran_ekstra');
    }
};
