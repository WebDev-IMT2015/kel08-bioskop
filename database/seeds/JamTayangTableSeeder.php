<?php

use Illuminate\Database\Seeder;

class JamTayangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 1,
            'id_studio' =>  1,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '10.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 1,
            'id_studio' =>  1,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '12.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 1,
            'id_studio' =>  1,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '14.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 1,
            'id_studio' =>  1,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '16.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 2,
            'id_studio' =>  2,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '10.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 2,
            'id_studio' =>  2,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '12.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 2,
            'id_studio' =>  2,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '14.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 2,
            'id_studio' =>  2,
            'id_film' => 1,
            'harga' => 20000,
            'jam' => '16.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 3,
            'id_studio' =>  3,
            'id_film' => 2,
            'harga' => 22000,
            'jam' => '10.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 3,
            'id_studio' =>  3,
            'id_film' => 2,
            'harga' => 22000,
            'jam' => '12.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_jadwal' => 3,
            'id_studio' =>  3,
            'id_film' => 2,
            'harga' => 22000,
            'jam' => '14.00',
            'tgl_tayang' => '2017-06-20',
        ]);

        DB::table('jam_tayang_films')->insert([
            'id_studio' =>  3,
            'id_jadwal' => 3,
            'id_film' => 2,
            'harga' => 22000,
            'jam' => '16.00',
            'tgl_tayang' => '2017-06-20',
        ]);
    }
}