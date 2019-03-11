<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 40);
            $table->string('image',150)->nullable();
            $table->decimal('price',9,2);
            $table->decimal('lastPrice',9,2)->nullable();  
            $table->text('description')->nullable();
            $table->bigInteger('views')->default(0); 
            $table->bigInteger('category_id')->default(1); 
            $table->smallInteger('inStock')->nullable();  
            $table->smallInteger('sold')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
