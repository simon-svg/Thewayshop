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
                'name_en' => 'Jackets',
                'name_ru' => 'Куртки',
                'parentCategoryId' => 1,
                'link' => null
            ],
            [
                'name_en' => 'Shirts',
                'name_ru' => 'Рубашки',
                'parentCategoryId' => 1,
                'link' => null
            ], 
            [
                'name_en' => 'Jeans',
                'name_ru' => 'Джинсы',
                'parentCategoryId' => 2,
                'link' => null
            ], 
            [
                'name_en' => 'Hats',
                'name_ru' => 'Шляпа',
                'parentCategoryId' => 2,
                'link' => null
            ],
            [
                'name_en' => 'Cart',
                'name_ru' => 'Корзина',
                'parentCategoryId' => 3,
                'link' => 'cart'
            ],
            [
                'name_en' => 'Checkout',
                'name_ru' => 'Проверить',
                'parentCategoryId' => 3,
                'link' => 'checkout'
            ],
        ]);
    }
}
