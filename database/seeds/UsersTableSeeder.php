<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1'),
            'type' => 'admin',
            'status' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'customserv',
            'email' => 'customserv@gmail.com',
            'password' => bcrypt('customserv1'),
            'type' => 'customerservice',
            'status' => 1,
        ]);
    }
}
