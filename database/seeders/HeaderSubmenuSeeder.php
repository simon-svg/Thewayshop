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
                'parentId' => 3,
                'parentCategoryId' => 1,
                'link' => null
            ],
            [
                'name' => 'Shirts',
                'parentId' => 3,
                'parentCategoryId' => 1,
                'link' => null
            ], 
            [
                'name' => 'Jeans',
                'parentId' => 3,
                'parentCategoryId' => 2,
                'link' => null
            ], 
            [
                'name' => 'Trousers',
                'parentId' => 3,
                'parentCategoryId' => 2,
                'link' => null
            ],
            [
                'name' => 'Cart',
                'parentId' => 3,
                'parentCategoryId' => 3,
                'link' => 'cart'
            ],
            [
                'name' => 'Checkout',
                'parentId' => 3,
                'parentCategoryId' => 3,
                'link' => 'checkout'
            ],
            [
                'name' => 'Shop Details',
                'parentId' => 3,
                'parentCategoryId' => 3,
                'link' => 'shopDetail'
            ]
        ]);
    }
}
