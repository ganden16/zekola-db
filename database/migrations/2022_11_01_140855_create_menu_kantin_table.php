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
        Schema::create('menu_kantin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kantin');
            $table->string('menu');
            $table->string('kategori');
            $table->integer('harga');
            $table->string('status'); //tersedia, tidak tersedia
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('menu_kantin');
    }
};
