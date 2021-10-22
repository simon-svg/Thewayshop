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
                'title_en' => 'Welcome To <br> Thewayshop',
                'title_ru' => 'Добро пожаловать в <br> Thewayshop',
                'subtitle_en' => 'See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.',
                'subtitle_ru' => 'Посмотрите, как пользователи воспринимают ваш веб-сайт в реальном времени, или просмотрите тенденции <br>, чтобы увидеть любые изменения производительности с течением времени.',
                'img' => 'home/tso2aAbnM3oZoqOTdZORYp3e8meGGJnvwoOoLS1z.jpg'
            ],
            [
                'title_en' => 'Welcome To <br> Thewayshop',
                'title_ru' => 'Добро пожаловать в <br> Thewayshop',
                'subtitle_en' => 'See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.',
                'subtitle_ru' => 'Посмотрите, как пользователи воспринимают ваш веб-сайт в реальном времени, или просмотрите тенденции <br>, чтобы увидеть любые изменения производительности с течением времени.',
                'img' => 'home/hlqQb2Yl7E1YW4OdaAQtZ5QDzigXYzJzhzimMvYw.jpg'
            ],
            [
                'title_en' => 'Welcome To <br> Thewayshop',
                'title_ru' => 'Добро пожаловать в <br> Thewayshop',
                'subtitle_en' => 'See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.',
                'subtitle_ru' => 'Посмотрите, как пользователи воспринимают ваш веб-сайт в реальном времени, или просмотрите тенденции <br>, чтобы увидеть любые изменения производительности с течением времени.',
                'img' => 'home/HHvEHym0aTmjTjUzqDXmiboJg7L4zHXs8IkgDv5B.jpg'
            ],
        ]);
    }
}
