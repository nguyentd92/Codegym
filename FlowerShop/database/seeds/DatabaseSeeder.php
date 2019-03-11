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
        $this->call(CategorySeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(PromotionsSeeder::class);
        $this->call(ProductPromotionSeeder::class);
    }
}
