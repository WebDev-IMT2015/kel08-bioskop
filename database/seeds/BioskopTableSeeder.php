<?php

use Illuminate\Database\Seeder;

class BioskopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bioskop')->insert([
            'name' => str_random(10),
            'lokasi' => str_random(10),
            'status' => '1',
        ]);
    }
}