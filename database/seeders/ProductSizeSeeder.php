<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->insert([
            [
                'name' => 's',
                'product_id' => 1,
            ],
            [
                'name' => 'l',
                'product_id' => 1,
            ],
            [
                'name' => '4xl',
                'product_id' => 1,
            ],
            [
                'name' => 's',
                'product_id' => 2,
            ],
            [
                'name' => 'm',
                'product_id' => 2,
            ],
            [
                'name' => 'l',
                'product_id' => 2,
            ],
            [
                'name' => 'm',
                'product_id' => 3,
            ],
            [
                'name' => 'xl',
                'product_id' => 3,
            ],
            [
                'name' => '3xl',
                'product_id' => 3,
            ],
            [
                'name' => 'xs',
                'product_id' => 4,
            ],
            [
                'name' => 'm',
                'product_id' => 4,
            ],
            [
                'name' => 'xxl',
                'product_id' => 4,
            ],
        ]);
    }
}
