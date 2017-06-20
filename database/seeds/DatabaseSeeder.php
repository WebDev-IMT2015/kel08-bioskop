<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // $this->call(FilmsTableSeeder::class);
        // $this->call(BioskopsTableSeeder::class);
        // $this->call(StudiosTableSeeder::class);
    }
}
