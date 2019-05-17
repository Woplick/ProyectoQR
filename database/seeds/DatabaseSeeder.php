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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Color::class,10)->create();
        factory(\App\Client::class,10)->create();
        factory(\App\Size::class,10)->create();
        factory(\App\Brand::class,10)->create();
        factory(\App\Category::class,10)->create();
        factory(\App\Wholeseller::class,10)->create();

    }
}
