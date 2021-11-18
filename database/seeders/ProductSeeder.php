<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name_en' => 'Lorem Fachion ipsum dolor sit amet',
                'name_ru' => 'Воспитанные люди должны удовлетворять',
                'price' => '60',
                'sale' => NULL,
                'description_en' => 'English texts for beginners to practice reading and comprehension online and for free. Practicing your comprehension of written English will both improve your.',
                'description_ru' => 'Эта книга адресована всем, кто изучает русский язык. Но состоит она не из правил, упражнений и учебных текстов. Для этого созданы другие замечательные учебники.',
                'count' => '7',
                'number' => '95841648711',
                'img' => 'product/JsPDRHksYSEuW3nSxtFYZqBMUuSULqZM7hzgjWlk.jpg',
                'show' => '1',
                'best_product' => '1',
                'category_id' => '4',
            ],
            [
                'name_en' => 'Fachion Lorem ipsum dolor sit amet',
                'name_ru' => 'Для этого созданы другие замечательные учебники',
                'price' => '50',
                'sale' => '40',
                'description_en' => 'Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at, tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu.',
                'description_ru' => 'Вы можете соглашаться или не соглашаться с тем, что прочитаете в этой книге. Возможно, вам покажется, что какие-то мысли уже устарели. Но вы должны обязательно подумать и обосновать, почему вы так считаете.',
                'count' => '5',
                'number' => '654654653',
                'img' => 'product/L6P1q6C3spiVnvNzKDDIygBZyEXMiGFF65RnCwxm.jpg',
                'show' => '1',
                'best_product' => '0',
                'category_id' => '1',
            ],
            [
                'name_en' => 'Prepared by experienced English teachers',
                'name_ru' => 'Бойся думать без участия сердца',
                'price' => '90',
                'sale' => NULL,
                'description_en' => 'Take the multiple-choice quiz following each text, and you\'ll get the results immediately. You will feel both challenged and accomplished!',
                'description_ru' => 'Когда человек сознательно или интуитивно выбирает себе в жизни какую-то цель, жизненную задачу, он невольно дает себе оценку. По тому, ради чего низкой или высокой.',
                'count' => '2',
                'number' => '6351181518',
                'img' => 'product/fOfn3vwkuVSb6hy8Jh74395TWYVJlmmKtNvP7Emt.jpg',
                'show' => '1',
                'best_product' => '1',
                'category_id' => '4',
            ],
            [
                'name_en' => 'My Wonderful Family',
                'name_ru' => 'Надо прожить жизнь с достоинством',
                'price' => '150',
                'sale' => '130',
                'description_en' => 'My Wonderful Family I live in a house near the mountains. I have two brothers and one sister, and I was born last. My father teaches mathematics, and my mother is a nurse at a big hospital',
                'description_ru' => 'Можно по-разному определять цель своего существования, но цель должна быть. Надо иметь и принципы в жизни. Одно правило в жизни должно быть у каждого человека, в его цели жизни, в его принципах жизни, в его поведении',
                'count' => '8',
                'number' => '546516841',
                'img' => 'product/gNOR7Qk3k1wObfg1WweAsDw6Ic9VSNJsq1kPPV6Z.png',
                'show' => '1',
                'best_product' => '0',
                'category_id' => '3',
            ],
        ]);
    }
}
