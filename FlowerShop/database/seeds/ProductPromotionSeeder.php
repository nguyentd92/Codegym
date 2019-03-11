<?php

use Illuminate\Database\Seeder;

class ProductPromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 20; $i++) { 
            for ($j = 1; $j <= 6; $j++) {
                $random = mt_rand(1,2);
                if ($random % 2 === 0)
                {   
                    DB::table('product_promotion')->insert(
                        ['product_id' => $i, 'promotion_id' => $j]
                    );
                }

            };           

        };
    }
}
