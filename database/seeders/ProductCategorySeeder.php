<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name_en' => 'Jackets',
                'name_ru' => 'Куртки',
                'parent_category_id' => 1,
            ],
            [
                'name_en' => 'Shirts',
                'name_ru' => 'Рубашки',
                'parent_category_id' => 1,
            ],
            [
                'name_en' => 'Jeans',
                'name_ru' => 'Джинсы',
                'parent_category_id' => 2,
            ],
            [
                'name_en' => 'Trousers',
                'name_ru' => 'Штаны',
                'parent_category_id' => 2,
            ],
        ]);
    }
}
