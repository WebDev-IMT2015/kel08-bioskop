<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            'judul' => 'Pirate of Carribean',
            'durasi' => 120,
            'rate_umur' => 'dewasa',
            'status' => '1',
        ]);

        DB::table('film')->insert([
            'judul' => 'Beauty and The Beast',
            'durasi' => 120,
            'rate_umur' => 'semua',
            'status' => '1',
        ]);

        DB::table('film')->insert([
            'judul' => 'Hansel and Gretel',
            'durasi' => 120,
            'rate_umur' => 'anak',
            'status' => '1',
        ]);

        DB::table('film')->insert([
            'judul' => 'ABC',
            'durasi' => 120,
            'rate_umur' => 'remaja',
            'status' => '1',
        ]);

        DB::table('film')->insert([
            'judul' => 'Koe no Katachi',
            'durasi' => 120,
            'rate_umur' => 'remaja',
            'status' => '1',
        ]);
    }
}