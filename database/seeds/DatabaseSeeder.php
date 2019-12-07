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
        DB::table('admins')->insert([
            [
                'name' => 'Pablo Eliézer',
                'age' => 21,
                'location' => 'Brazil',
                'email' => 'pabloeliezer@hotmail.com',
                'password' => Hash::make('senhasenha'),
            ]
        ]);

        DB::table('categories')->insert([
            [
                'name' => 'Notebook'
            ],
            [
                'name' => 'Smartphone'
            ],
            [
                'name' => 'Acessório'
            ]
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Notebook Positivo x89',
                'description' => 'A Notebook for gamers',
                'price' => 2999.90,
                'category_id' => 1
            ],
            [
                'name' => 'Notebook acer aspire e5',
                'description' => 'A notebook for home',
                'price' => 2000.0,
                'category_id' => 1
            ],
            [
                'name' => 'Mouse gamer multilaser',
                'description' => 'A mouse for gamers',
                'price' => 12.50,
                'category_id' => 3
            ]
        ]);
    }
}
