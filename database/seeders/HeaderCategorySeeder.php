<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_categories')->insert([
            [
                'name_en' => 'TOP',
                'name_ru' => 'ТОП',
                'parentId' => 3
            ],
            [
                'name_en' => 'BOTTOM',
                'name_ru' => 'НИЖНИЙ',
                'parentId' => 3
            ],
            [
                'name_en' => 'Shop',
                'name_ru' => 'Магазин',
                'parentId' => 4
            ]
        ]);
    }
}