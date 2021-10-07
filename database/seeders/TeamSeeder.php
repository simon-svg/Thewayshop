<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Williamson',
                'position' => 'Web Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => '1633519779.jpg'
            ],
            [
                'name' => 'Kristiana',
                'position' => 'Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => '1633519787.jpg'
            ],
            [
                'name' => 'Steve Thomas',
                'position' => 'Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => '1633519798.jpg'
            ],
            [
                'name' => 'Williamson',
                'position' => 'Web Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => '1633521560.jpg'
            ]
        ]);
    }
}