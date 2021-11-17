<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imgs')->insert([
            [
                'img' => 'product/dzH87tl2sLlNz0CqKtwSljr6C89Ddgx1lQKBDpAk.jpg',
                'product_id' => 1,
            ],
            [
                'img' => 'product/J2d4kmqjRTXboztj4be3vBjv8mbPlBgNxvHVGNc4.jpg',
                'product_id' => 1,
            ],
            [
                'img' => 'product/aTMaEJA22BCjOSUIDg6O4jrePQJgNCTQQhIvOcHs.jpg',
                'product_id' => 1,
            ],
            [
                'img' => 'product/gy378SRhLYkz1C6pl4dg2KdvZqbxCXEOU4UAkTqd.jpg',
                'product_id' => 2,
            ],
            [
                'img' => 'product/xUSzVcncx7ZzbYTVQA2PJFVjojMBlAFkdzvGZfTw.jpg',
                'product_id' => 2,
            ],
            [
                'img' => 'product/TISwqL9MgH4dUUqvVXjAz8ierf8W0aiEM8fdq3ok.jpg',
                'product_id' => 2,
            ],
            [
                'img' => 'product/HyIqmisy7ZgtIg2OgnHA0qzhUe7Ppkqu78DGVe4q.jpg',
                'product_id' => 3,
            ],
            [
                'img' => 'product/FMTl4Bp8IJXXoKuD0TjcdyQQnHkpSCjjnYnbWu7R.jpg',
                'product_id' => 3,
            ],
            [
                'img' => 'product/GqXekhg0kFHD8f5VDD4DAcTBmh1bjWpiuhO3GCfq.jpg',
                'product_id' => 3,
            ],
            [
                'img' => 'product/yB2HNOjCZextThgsY4cqrQVPiX0AqUuXy0nxhS7E.jpg',
                'product_id' => 4,
            ],
            [
                'img' => 'product/h8kPAzrXm3y3GoQWuAEpJdq2ITcb26UvGno7e63f.jpg',
                'product_id' => 4,
            ],
            [
                'img' => 'product/lcBVCIwEwu4tL0450gsN4yFzggUGSOc4lasIekRb.jpg',
                'product_id' => 4,
            ],
        ]);
    }
}
