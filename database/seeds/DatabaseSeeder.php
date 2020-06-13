<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

/* db:seed function caller  */ 

    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        
    }
}
