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
                'name_en' => 'Home',
                'name_ru' => 'Главная',
                'link' => 'home'
            ],
            [
                'name_en' => 'About Us',
                'name_ru' => 'О нас',
                'link' => 'about'
            ],
            [
                'name_en' => 'Product',
                'name_ru' => 'Продукт',
                'link' => null
            ],
            [
                'name_en' => 'Shop',
                'name_ru' => 'Магазин',
                'link' => null
            ],
            [
                'name_en' => 'Our Service',
                'name_ru' => 'Наш сервис',
                'link' => 'service',
            ],
            [
                'name_en' => 'Contact Us',
                'name_ru' => 'Связаться с нами',
                'link' => 'contact',
            ]
        ]);
    }
}
