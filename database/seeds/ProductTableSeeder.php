<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://shebairaniancarpets.com/files/Nain_red_persian_carpet.jpg',
            'title' => 'Wool Carpet',
            'description' => 'Traditional handmade iranian wool carpet',
            'price' => 699
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://previews.123rf.com/images/zanskar/zanskar0901/zanskar090100023/4238263-persian-carpets-iranian-carpets-and-rugs-.jpg',
            'title' => 'Paper Carpet',
            'description' => 'Traditional handmade iranian paper carpet',
            'price' => 249
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://www.little-persia.com/img/570_1.jpg',
            'title' => 'Flying Carpet',
            'description' => 'This carpet can actually fly. Trust me!',
            'price' => 199
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzFLwlJgMqmG6VWD-GsA-40CMVoJQbbfXfW_LAfvZpp3uUnCplug',
            'title' => 'Poor sheepman carpet',
            'description' => 'This carpet is made of dead kittens. Comfortable and cousy!',
            'price' => 979
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGkai_jM6SQCrVbl2fQdUphLZreIrkBZqVxskPoMfPnd-zEhZ7',
            'title' => 'Magic Carpet',
            'description' => 'This carpet makes his owner invisible',
            'price' => 1299
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://static2.en.eghtesadonline.com/thumbnail/GbCxP1G67KbU/GmWwSFvKwS57ga0Kw9aYQuqXLO5cWDjYNxKc7X5AUzfCp-xBMMXsOO8lOCBUk9A-/MVTup5pH12pj.jpg',
            'title' => 'Cool Carpet',
            'description' => 'Very comfortable carpet with air conditioning',
            'price' => 199
        ]);
        $product->save();
        
        
    }
}
