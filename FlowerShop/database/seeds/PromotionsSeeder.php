<?php

use Illuminate\Database\Seeder;
use App\Promotion;

class PromotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion = new Promotion;
        $promotion->description = 'Tặng áo';
        $promotion->save();

        $promotion = new Promotion;
        $promotion->description = 'Vận chuyển miễn phí';
        $promotion->save();

        $promotion = new Promotion;
        $promotion->description = 'Hoàn tiền 100%';
        $promotion->save();

        $promotion = new Promotion;
        $promotion->description = 'Giao tận nhà';
        $promotion->save();

        $promotion = new Promotion;
        $promotion->description = 'Cam kết hoa tươi';
        $promotion->save();

        $promotion = new Promotion;
        $promotion->description = 'Gói quà miễn phí';
        $promotion->save();
    }
}
