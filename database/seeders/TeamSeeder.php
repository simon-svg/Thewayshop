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
                'img' => 'team/AxHpGkKsRIBDjM4Okty7ZUDJNCsNbOUyqq2lXm1z.jpg'
            ],
            [
                'name' => 'Kristiana',
                'position' => 'Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => 'team/EhZa94zmDoVGso0cGUxED6fS4q1dTn8mHaZvdDqq.jpg'
            ],
            [
                'name' => 'Steve Thomas',
                'position' => 'Designer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => 'team/VM2wZiZZjuL4skWGhA4f0phxNh0wRHEv62PhO9qn.jpg'
            ],
            [
                'name' => 'Williamson',
                'position' => 'Web Developer',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'img' => 'team/Em75F2ARtBHlk599HM2I2ARxbtzMsezts70WHYhe.jpg'
            ]
        ]);
    }
}