<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 20; $i++) { 
            $product = new Product;
            $product->name = 'Product '.($i+1);
            $product->price = mt_rand(50,200);
            $product->lastPrice = mt_rand(60,250);
            $product->description = str_random(200);
            $product->category_id = mt_rand(1,6);
            $product->save();            
        };

    }
}
