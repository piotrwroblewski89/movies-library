<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
/* category seed  */ 

    public function run()
    {
        
        $now = Carbon::now()->toDateTimeString();

            Category::create([
                'name' => 'Sci-fi', 
                'slug' => 'sci-fi',
                'created_at' => $now, 
                'updated_at' => $now
                ]);


            Category::create([
                'name' => 'Fantasy',
                 'slug' => 'fantasy',
                 'created_at' => $now, 
                'updated_at' => $now
                 ]);

            Category::create([ 
                'name' => 'Historical',
                 'slug' => 'historical',
                 'created_at' => $now, 
                'updated_at' => $now
                 ]);

            Category::create([
                'name' => 'Romance', 
                'slug' => 'romance',
                'created_at' => $now, 
                'updated_at' => $now
                ]);

            Category::create([
                'name' => 'Thriller',
                 'slug' => 'thriller',
                 'created_at' => $now, 
                'updated_at' => $now
                 ]);

            Category::create([
                'name' => 'Novel',
                'slug' => 'novel',
                'created_at' => $now, 
                'updated_at' => $now
             ]);
         

        

    }
}
