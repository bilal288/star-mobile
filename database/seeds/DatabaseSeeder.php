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
        $this->call(articlesSeeder::class);
        $this->call(articleTypesSeeder::class);
        $this->call(usersSeeder::class);
    }
}
