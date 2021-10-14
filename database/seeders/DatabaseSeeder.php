<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(HeaderSeeder::class);
        $this->call(HeaderCategorySeeder::class);
        $this->call(HeaderSubmenuSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(UserSeeder::class);
    }
}
