<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->integer('id_jtf')->unsigned();
            $table->foreign('id_jtf')->references('id_jtf')->on('jam_tayang_films');
            $table->integer('jumlah_tiket');
            $table->date('tlg_pesan');
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
        Schema::dropIfExists('orders');    }
}
