<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamTayangFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_tayang_films', function (Blueprint $table) {
            $table->increments('id_jtf');
            $table->integer('id_jadwal')->unsigned();
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals');
            $table->integer('id_studio');
            $table->integer('id_film');
            $table->integer('harga');
            $table->string('jam');
            $table->date('tgl_tayang');
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
        Schema::dropIfExists('jam_tayang_films');    }
}
