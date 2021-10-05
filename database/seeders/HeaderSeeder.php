<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'name' => 'Home',
                'link' => 'home'
            ],
            [
                'name' => 'About Us',
                'link' => 'about'
            ],
            [
                'name' => 'Product',
                'link' => null
            ],
            [
                'name' => 'Shop',
                'link' => null
            ],
            [
                'name' => 'Our Service',
                'link' => 'service',
            ],
            [
                'name' => 'Contact Us',
                'link' => 'contact',
            ]
        ]);
    }
}
