<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Product::create([
            'name' => 'Steelhearth',
            'author' => ' Brandon Sanderson',
            'slug' => 'Steelhearth ',
            'details' => 'There are no heroes.Every single person who manifested powers—we call them Epics—turned out to be evil. Here, in the city once known as Chicago, an extraordinarily powerful Epic declared himself Emperor. ',
            'genere' => 'Fantasy',
            'miniature' => ' https://www.brandonsanderson.com/the-reckoners-series/#steelheart',
            'price' => 20,
            
            
            ]);
            
        
            Product::create([
            'name' => 'Firefight',
            'author' => 'Brandon Sanderson ',
            'slug' => 'Firefight',
            'details' => 'They told David it was impossible—that even the Reckoners had never killed a High Epic. Regalia, 
            David is sure Babylon Restored will lead him to what he needs to find. And while entering another city oppressed by ',
            'genere' => 'Fantasy',
            'miniature' => 'https://www.brandonsanderson.com/wp-content/uploads/2019/11/Firefight.jpg ',
            'price' => 29,
            
            
            ]);
        
        
            Product::create([
            'name' => 'Calamity',
            'author' => 'Brandon Sanderson ',
            'slug' => 'Calamity',
            'details' => 'When Calamity lit up the sky, the Epics were born. David’s fate has been tied to their villainy ever since 
            that historic night. Steelheart killed his father. .',
            'genere' => 'Fantasy',
            'miniature' => ' https://www.brandonsanderson.com/wp-content/uploads/2019/11/Calamity.jpg',
            'price' => 32,
            
            
            ]);
            
            Product::create([
            'name' => 'Dountless',
            'author' => 'Jack Campbell',
            'slug' => 'Dountless',
            'details' => 'Captain John "Black Jack" Gearys legendary exploits are known to every schoolchild. Revered for his heroic "last stand" in the early days of the war, he was...',
            'genere' => 'Sci-fi',
            'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51vjCTN1CwL._SL500_.jpg',
            'price' => 7,
            
            
            ]);
            
        
            Product::create([
            'name' => 'Fearless',
            'author' => 'Jack Campbell',
            'slug' => 'Fearless',
            'details' => 'Captain John "Black Jack" Geary tries a desperate gamble to lead the Alliance Fleet home through enemy-occupied 
            space in this novel in the thrilling Lost Fleet series...',
            'genere' => 'Sci-fi',
            'miniature' => 'https://m.media-amazon.com/images/I/51iq+Ae-7KL._SL300_.jpg',
            'price' => 6,
            
            
            ]);
        
        
            Product::create([
            'name' => 'Courageous',
            'author' => 'Jack Campbell',
            'slug' => 'Courageous',
            'details' => 'The Lost Fleet continues its perilous journey home.Badly damaged and low on supplies,Geary hopes they can continue to remain one step ahead of their enemies.',
            'genere' => 'Sci-fi',
            'miniature' => 'https://m.media-amazon.com/images/I/51qPF47iinL._SL500_.jpg',
            'price' => 9,
            
            
            ]);
        
        Product::create([
            'name' => 'War and Peace',
            'author' => 'Leo Tolstoy',
            'slug' => 'War and Peace',
            'details' => ' War and Peace broadly focuses on Napoleon’s invasion of Russia in 1812 and follows three of the most well-known characters in literature: Pierre Bezukhov,',
            'genere' => 'Historical',
            'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51J1nb00FLL._SX330_BO1,204,203,200_.jpg',
            'price' => 8,
            
            
            ]);
            
    }
}
