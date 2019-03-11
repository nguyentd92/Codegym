<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function promotions(){
        return $this->belongsToMany('App\Promotion','product_promotion');
    }    

    public function orders() {
        return $this->belongsToMany('App\Order','order_product');
    }

    public function category() {
        return $this->belongsTo('App\Category','category_id');
    }
}
