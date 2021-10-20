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
                'name' => 'Jackets',
                'parent_category_id' => 1,
            ],
            [
                'name' => 'Shirts',
                'parent_category_id' => 1,
            ],
            [
                'name' => 'Jeans',
                'parent_category_id' => 2,
            ],
            [
                'name' => 'Trousers',
                'parent_category_id' => 2,
            ],
        ]);
    }
}
