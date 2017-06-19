<?php

use Illuminate\Database\Seeder;

class StudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numb==1;

        DB::table('studio')->insert([
            'id_bioskop' => $numb,
            'jenis' => 'reguler',
            'jumlah_kursi' => int_random(2),
            'status' => $numb,
        ]);
    }
}