<?php

use Illuminate\Database\Seeder;

class BioskopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bioskops')->insert([
            'nama' => 'XXI PTC',
            'lokasi' => 'Surabaya',
            'status' => '1',
        ]);

        DB::table('bioskops')->insert([
            'nama' => 'I-MAX PTC',
            'lokasi' => 'Surabaya',
            'status' => '1',
        ]);

        DB::table('bioskops')->insert([
            'nama' => 'Mangga Dua',
            'lokasi' => 'Jakarta',
            'status' => '1',
        ]);
    }
}