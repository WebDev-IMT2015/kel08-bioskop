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
        DB::table('bioskop')->insert([
            'name' => 'XXI PTC',
            'lokasi' => 'Surabaya',
            'status' => '1',
        ]);

        DB::table('bioskop')->insert([
            'name' => 'I-MAX PTC',
            'lokasi' => 'Surabaya',
            'status' => '1',
        ]);

        DB::table('bioskop')->insert([
            'name' => 'Mangga Dua',
            'lokasi' => 'Jakarta',
            'status' => '1',
        ]);
    }
}