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
                'name' => 'TOP',
                'parentId' => 3
            ],
            [
                'name' => 'BOTTOM',
                'parentId' => 3
            ],
            [
                'name' => 'Shop',
                'parentId' => 4
            ]
        ]);
    }
}