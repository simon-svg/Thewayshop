<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            [
                'title' => 'Welcome To <br> Thewayshop',
                'subtitle' => 'See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.',
                'img' => '1633438109.jpg'
            ],
            [
                'title' => 'Welcome To <br> Thewayshop',
                'subtitle' => 'See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.',
                'img' => '1633438127.jpg'
            ],
            [
                'title' => 'Welcome To <br> Thewayshop',
                'subtitle' => 'See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.',
                'img' => '1633438140.jpg'
            ]
        ]);
    }
}
