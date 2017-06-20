<?php

use Illuminate\Database\Seeder;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'id_studio' =>  1,
            'id_film' => 1,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  2,
            'id_film' => 1,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  3,
            'id_film' => 1,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  4,
            'id_film' => 1,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  5,
            'id_film' => 1,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  6,
            'id_film' => 1,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  1,
            'id_film' => 2,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  2,
            'id_film' => 2,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  3,
            'id_film' => 2,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  4,
            'id_film' => 2,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  5,
            'id_film' => 2,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);

        DB::table('jadwals')->insert([
            'id_studio' =>  6,
            'id_film' => 2,
            'tgl_tayang' => '2017-06-20',
            'tgl_berhenti' => '2017-06-27',
            'status' =>1,
        ]);
    }
}