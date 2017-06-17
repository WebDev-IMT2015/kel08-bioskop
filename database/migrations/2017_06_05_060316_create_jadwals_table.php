<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->integer('id_studio')->unsigned();
            $table->foreign('id_studio')->references('id_studio')->on('studios');
            $table->integer('id_film')->unsigned();
            $table->foreign('id_film')->references('id_film')->on('films');
            $table->date('tgl_tayang');
            $table->date('tgl_berhenti');
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
        Schema::dropIfExists('jadwals');    }
}
