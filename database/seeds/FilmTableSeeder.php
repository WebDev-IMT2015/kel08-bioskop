<?php

use Illuminate\Database\Seeder;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            'judul' => str_random(10),
            'durasi' => int_random(3),
            'rate_umur' => 'dewasa',
            'status' => '1',
        ]);
    }
}