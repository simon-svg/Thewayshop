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
                'name_en' => 'Williamson',
                'name_ru' => 'Уильямсон',
                'position_en' => 'Web Developer',
                'position_ru' => 'Веб-разработчик',
                'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'description_ru' => 'Эта книга адресована всем, кто изучает русский язык. Но состоит она не из правил, упражнений и учебных текстов. Для этого созданы другие замечательные учебники. У этой книги совсем иная задача.',
                'img' => 'team/AxHpGkKsRIBDjM4Okty7ZUDJNCsNbOUyqq2lXm1z.jpg'
            ],
            [
                'name_en' => 'Kristiana',
                'name_ru' => 'Кристиана',
                'position_en' => 'Designer',
                'position_ru' => 'Дизайнер',
                'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'description_ru' => 'Эта книга адресована всем, кто изучает русский язык. Но состоит она не из правил, упражнений и учебных текстов. Для этого созданы другие замечательные учебники. У этой книги совсем иная задача.',
                'img' => 'team/EhZa94zmDoVGso0cGUxED6fS4q1dTn8mHaZvdDqq.jpg'
            ],
            [
                'name_en' => 'Steve Thomas',
                'name_ru' => 'Стив Томас',
                'position_en' => 'Designer',
                'position_ru' => 'Дизайнер',
                'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'description_ru' => 'Эта книга адресована всем, кто изучает русский язык. Но состоит она не из правил, упражнений и учебных текстов. Для этого созданы другие замечательные учебники. У этой книги совсем иная задача.',
                'img' => 'team/VM2wZiZZjuL4skWGhA4f0phxNh0wRHEv62PhO9qn.jpg'
            ],
            [
                'name_en' => 'Williamson',
                'name_ru' => 'Уильямсон',
                'position_en' => 'Web Developer',
                'position_ru' => 'Веб-разработчик',
                'description_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate.',
                'description_ru' => 'Эта книга адресована всем, кто изучает русский язык. Но состоит она не из правил, упражнений и учебных текстов. Для этого созданы другие замечательные учебники. У этой книги совсем иная задача.',
                'img' => 'team/Em75F2ARtBHlk599HM2I2ARxbtzMsezts70WHYhe.jpg'
            ]
        ]);
    }
}