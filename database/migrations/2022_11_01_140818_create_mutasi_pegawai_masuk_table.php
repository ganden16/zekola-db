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
        Schema::create('mutasi_pegawai_masuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('asal');
            $table->date('tanggal');
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
        Schema::dropIfExists('mutasi_pegawai_masuk');
    }
};
