<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Rose','Daisy','Orchid','Sunflower','Tulip','Cyclamen'];
        for ($i=0; $i <6 ; $i++) { 
            $category = new Category;
            $category->name = $array[$i];
            $category->save();
        };       

    }
}
