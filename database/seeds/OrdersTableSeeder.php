<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id_jtf' => 1,
            'jumlah_tiket' => 1,
            'tgl_pesan' => '2017-06-20',
            'id_kursi' => 'A1',
        ]);

        DB::table('orders')->insert([
            'id_jtf' => 1,
            'jumlah_tiket' => 2,
            'tgl_pesan' => '2017-06-20',
            'id_kursi' => 'A1',
        ]);

        DB::table('orders')->insert([
            'id_jtf' => 1,
            'jumlah_tiket' => 10,
            'tgl_pesan' => '2017-06-20',
            'id_kursi' => 'A1',
        ]);
    }
}