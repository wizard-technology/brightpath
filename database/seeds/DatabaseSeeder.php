<?php

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
        // factory(App\User::class)->create();

        for ($i = 0; $i < 5; $i++) {
            factory(App\Article::class)->create();
        }
    }
}
