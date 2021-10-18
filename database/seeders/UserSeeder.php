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
                'role' => 'admin',
                'login' => 'simon',
                'password' => '$2y$10$0nQBOCT1wSEB8UmP8rdnN.AJ3KcbG5hqfYl.czksJnQLGG/0SOH4K'
            ],
            [
                'name' => 'vardan',
                'last_name' => 'vardanyan',
                'email' => 'vardan@gmail.com',
                'role' => 'user',
                'login' => 'vardan',
                'password' => '$2y$10$p75sdCaUe3rV9TAnEes/MuoU7TaZoV3skx/Xzfwn40iaAC5AOHK9K'
            ],
        ]);
    }
}
