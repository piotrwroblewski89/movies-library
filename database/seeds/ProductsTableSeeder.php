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

/* Poduct seed  */ 

    public function run()
    {
        
            Product::create([
            'name' => 'Steelhearth',
            'author' => ' Brandon Sanderson',
            'slug' => 'Steelhearth ',
            'details' => 'There are no heroes.Every single person who manifested powers—we call them Epics—turned out to be evil. Here, in the city once known as Chicago, an extraordinarily powerful Epic declared himself Emperor. ',
            'genere' => 'Fantasy',
            'miniature' => 'https://www.brandonsanderson.com/wp-content/uploads/2019/11/Steelheart.jpg',
            'price' => 20,
            
            
            ])->categories()->attach(2);
            
        
            Product::create([
            'name' => 'Firefight',
            'author' => 'Brandon Sanderson ',
            'slug' => 'Firefight',
            'details' => 'They told David it was impossible—that even the Reckoners had never killed a High Epic. Regalia, 
            David is sure Babylon Restored will lead him to what he needs to find. And while entering another city oppressed by ',
            'genere' => 'Fantasy',
            'miniature' => 'https://www.brandonsanderson.com/wp-content/uploads/2019/11/Firefight.jpg ',
            'price' => 29,
            
            
            ])->categories()->attach(2);
        
        
            Product::create([
            'name' => 'Calamity',
            'author' => 'Brandon Sanderson ',
            'slug' => 'Calamity',
            'details' => 'When Calamity lit up the sky, the Epics were born. David’s fate has been tied to their villainy ever since 
            that historic night. Steelheart killed his father. .',
            'genere' => 'Fantasy',
            'miniature' => ' https://www.brandonsanderson.com/wp-content/uploads/2019/11/Calamity.jpg',
            'price' => 32,
            
            
            ])->categories()->attach(2);
            
            Product::create([
            'name' => 'Dountless',
            'author' => 'Jack Campbell',
            'slug' => 'Dountless',
            'details' => 'Captain John "Black Jack" Gearys legendary exploits are known to every schoolchild. Revered for his heroic "last stand" in the early days of the war, he was...',
            'genere' => 'Sci-fi',
            'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51vjCTN1CwL._SL500_.jpg',
            'price' => 7.01,
            
            
            ])->categories()->attach(1);
            
        
            Product::create([
            'name' => 'Fearless',
            'author' => 'Jack Campbell',
            'slug' => 'Fearless',
            'details' => 'Captain John "Black Jack" Geary tries a desperate gamble to lead the Alliance Fleet home through enemy-occupied 
            space in this novel in the thrilling Lost Fleet series...',
            'genere' => 'Sci-fi',
            'miniature' => 'https://m.media-amazon.com/images/I/51iq+Ae-7KL._SL300_.jpg',
            'price' => 6.99,
            
            
            ])->categories()->attach(1);
        
        
            Product::create([
            'name' => 'Courageous',
            'author' => 'Jack Campbell',
            'slug' => 'Courageous',
            'details' => 'The Lost Fleet continues its perilous journey home.Badly damaged and low on supplies,Geary hopes they can continue to remain one step ahead of their enemies.',
            'genere' => 'Sci-fi',
            'miniature' => 'https://m.media-amazon.com/images/I/51qPF47iinL._SL500_.jpg',
            'price' => 9.99,
            
            
            ])->categories()->attach(1);
        
        Product::create([
            'name' => 'War and Peace',
            'author' => 'Leo Tolstoy',
            'slug' => 'War and Peace',
            'details' => ' War and Peace broadly focuses on Napoleon’s invasion of Russia in 1812 and follows three of the most well-known characters in literature: Pierre Bezukhov,',
            'genere' => 'Historical',
            'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51J1nb00FLL._SX330_BO1,204,203,200_.jpg',
            'price' => 8.99,
            
            
            ])->categories()->attach(3);
            
            Product::create([
                'name' => 'Fifty Shades of Grey',
                'author' => ' E. L. James',
                'slug' => 'Fifty Shades of Grey',
                'details' => ' When literature student Anastasia Steele interviews successful entrepreneur Christian Grey, she finds him very attractive and deeply intimidating. Convinced that their meeting went badly, she tries to put him out of her mind – until he turns up at the store where she works part-time, and invites her out ',
                'genere' => 'Romance',
                'miniature' => 'https://m.media-amazon.com/images/I/51vOpiEjwdL.jpg',
                'price' => 10.19,
                
                
                ])->categories()->attach(4);
                
            
                Product::create([
                'name' => 'The girl on the train',
                'author' => 'Paula Hawkins',
                'slug' => 'The girl on the train',
                'details' => 'Rachel takes the same commuter train every morning and night. Every day she rattles down the track, flashes past a stretch of cozy suburban homes, and stops at the signal that allows her to daily watch the same couple breakfasting on their deck.',
                'genere' => 'Thriller',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51KQwCQ326L._SX331_BO1,204,203,200_.jpg',
                'price' => 26.99,
                
                
                ])->categories()->attach(5);
            
            
                Product::create([
                'name' => 'Gone girl',
                'author' => 'Gillian Flynn',
                'slug' => 'Gone grill',
                'details' => 'On a warm summer morning in North Carthage, Missouri, it is Nick and Amy Dunne’s fifth wedding anniversary. Presents are being wrapped and reservations are being made when Nick’s clever and beautifu...',
                'genere' => 'Thriller',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/41etyGVwOwL._SX326_BO1,204,203,200_.jpg',
                'price' => 26.65,
                
                
                ])->categories()->attach(5);
                
                Product::create([
                'name' => 'The Fault in Our Stars',
                'author' => 'John Green',
                'slug' => 'The Fault in Our Stars',
                'details' => 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten.',
                'genere' => 'Romance',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51ED6WxFy8L._SX335_BO1,204,203,200_.jpg',
                'price' => 12.10,
                
                
                ])->categories()->attach(4);
                
            
                Product::create([
                'name' => 'Wonder',
                'author' => 'R. J. Palacio',
                'slug' => 'Wonder',
                'details' => 'Kindness brings us together no matter how far apart we are. Millions of people have read the #1 New York Times bestseller WONDER and fallen in love with Auggie Pullman, an ordinary boy with an extraordinary face.',
                'genere' => 'Novel',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/41rBFbAYOeL._SX337_BO1,204,203,200_.jpg',
                'price' => 10,
                
                
                ])->categories()->attach(6);
            
            
                Product::create([
                'name' => 'Harry Potter and the Deathly Hallows (book 7)',
                'author' => 'J. K. Rowling',
                'slug' => 'Harry Potter and the Deathly Hallows',
                'details' => 'The heart of Book 7 is a heros mission--not just in Harrys quest for the Horcruxes, but in his journey from boy to man--and Harry faces more danger than that found in all six books combined, from the direct threat of the Death Eaters and you-know-who, to the subtle perils of losing faith in himself. ',
                'genere' => 'Fantasy',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51jyI6lYi1L._SX342_BO1,204,203,200_.jpg',
                'price' => 20.98,
                
                
                ])->categories()->attach(2);
            
            Product::create([
                'name' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'slug' => 'The Great Gatsby',
                'details' => 'Invited to an extravagantly lavish party in a Long Island mansion, Nick Carraway, a young bachelor who has just settled in the neighbouring cottage, is intrigued by the mysterious host, Jay Gatsby, a flamboyant but reserved self-made man with murky business interests and a shadowy past.',
                'genere' => 'Romance',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/51-Vz8w-UZL._SX321_BO1,204,203,200_.jpg',
                'price' => 8.10,
                
                
                ])->categories()->attach(4);
    
         Product::create([
                'name' => 'Becoming',
                'author' => 'Michelle Obama',
                'slug' => 'Becoming',
                'details' => 'An intimate, powerful, and inspiring memoir by the former First Lady of the United States',
                'genere' => 'Historical',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/414JfiBCutL._SX327_BO1,204,203,200_.jpg',
                'price' => 12.89,
                
                
                ])->categories()->attach(3);
    
        Product::create([
                'name' => 'Call Me by Your Name',
                'author' => 'Andre Aciman',
                'slug' => 'Call Me by Your Name',
                'details' => 'Andre Acimans Call Me by Your Name is the story of a sudden and powerful romance that blossoms between an adolescent boy and a summer guest at his parents’ cliffside mansion on the Italian Riviera.',
                'genere' => 'Romance',
                'miniature' => 'https://images-na.ssl-images-amazon.com/images/I/41l2jXH2jEL._SX331_BO1,204,203,200_.jpg',
                'price' => 18.99,
                
                
                ])->categories()->attach(4);
    
    }
}
