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
                'name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'login' => 'admin',
                'password' => bcrypt('admin1'),
            ],
        ]);
    }
}
