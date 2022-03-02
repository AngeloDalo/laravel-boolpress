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
        $this->call(PostSeeder::class);
        $this->call(UserInfoSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
    }
}
