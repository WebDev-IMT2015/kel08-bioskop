<?php

use Illuminate\Database\Seeder;

class StudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('studios')->insert([
            'id_bioskop' => 1,
            'jenis' => 'reguler',
            'jumlah_kursi' => 63,
            'status' => 1,
        ]);

        DB::table('studios')->insert([
            'id_bioskop' => 1,
            'jenis' => 'sphereX',
            'jumlah_kursi' => 63,
            'status' => 1,
        ]);

        DB::table('studios')->insert([
            'id_bioskop' => 2,
            'jenis' => 'reguler',
            'jumlah_kursi' => 63,
            'status' => 1,
        ]);
        
        DB::table('studios')->insert([
            'id_bioskop' => 2,
            'jenis' => 'sphereX',
            'jumlah_kursi' => 63,
            'status' => 1,
        ]);

        DB::table('studios')->insert([
            'id_bioskop' => 3,
            'jenis' => 'reguler',
            'jumlah_kursi' => 63,
            'status' => 1,
        ]);
        
        DB::table('studios')->insert([
            'id_bioskop' => 3,
            'jenis' => 'sphereX',
            'jumlah_kursi' => 63,
            'status' => 1,
        ]);
    }
}