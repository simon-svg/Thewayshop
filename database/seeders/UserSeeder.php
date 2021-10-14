<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'simon',
                'last_name' => 'Karapetyan',
                'email' => 'simonkarapetyan605@gmail.com',
                'role' => 'superadmin',
                'login' => 'simon11',
                'password' => '$2y$10$0nQBOCT1wSEB8UmP8rdnN.AJ3KcbG5hqfYl.czksJnQLGG/0SOH4K'
            ]
        ]);
    }
}
