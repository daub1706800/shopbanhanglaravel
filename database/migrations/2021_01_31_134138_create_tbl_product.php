<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->foreign('caterogy_id')->references('category_id')->on('tbl_category_product');
            $table->foreign('brand_id')->references('brand_id')->on('tbl_brand');
            //$table->integer('caterogy_id');
            //$table->integer('brand_id');
            $table->text('product_desc');
            $table->string('product_price');
            $table->text('product_content');
            $table->string('product_images');
            $table->integer('product_status');
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
        Schema::dropIfExists('tbl_product');
    }
}
