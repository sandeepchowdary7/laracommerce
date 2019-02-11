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
            $table->increments('id');
            $table->string('sku');
            $table->string('code');
            $table->string('name');
            $table->longText('description');
            $table->unsignedInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('quantity_per_unit');
            $table->double('unit_price');
            $table->double('msrp');
            $table->string('available_size');
            $table->string('available_color');
            $table->string('discount');
            $table->string('unit_weight');
            $table->integer('units_in_stock');
            $table->integer('units_on_stock');
            $table->enum('product_available', array('yes', 'no'));
            $table->enum('discount_available', array('yes', 'no'));
            $table->string('current_order');
            $table->string('picture');
            $table->string('ranking');
            $table->text('note');
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
