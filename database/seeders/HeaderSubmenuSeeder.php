<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_submenus')->insert([
            [
                'name' => 'Jackets',
                'parentCategoryId' => 1,
                'link' => null
            ],
            [
                'name' => 'Shirts',
                'parentCategoryId' => 1,
                'link' => null
            ], 
            [
                'name' => 'Jeans',
                'parentCategoryId' => 2,
                'link' => null
            ], 
            [
                'name' => 'Trousers',
                'parentCategoryId' => 2,
                'link' => null
            ],
            [
                'name' => 'Cart',
                'parentCategoryId' => 3,
                'link' => 'cart'
            ],
            [
                'name' => 'Checkout',
                'parentCategoryId' => 3,
                'link' => 'checkout'
            ]
        ]);
    }
}
