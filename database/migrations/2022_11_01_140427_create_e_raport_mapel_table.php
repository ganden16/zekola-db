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
        Schema::create('e_raport_mapel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->foreignId('id_mapel');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->string('nama_nilai'); //pengetahuan, keterampilan, sikap
            $table->integer('nilai'); 
            $table->string('nilai_predikat'); 
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
        Schema::dropIfExists('e_raport_mapel');
    }
};
