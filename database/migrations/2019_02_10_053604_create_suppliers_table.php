<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('Adress1');
            $table->string('Adress2');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->string('country');
            $table->integer('phone_number');
            $table->string('email');
            $table->string('url');
            $table->string('payment_methods');
            $table->string('discount_type');
            $table->string('type_goods');
            $table->string('notes');
            $table->string('discount_available');
            $table->string('current_order');
            $table->string('logo');
            $table->string('size_url');
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
        Schema::dropIfExists('suppliers');
    }
}
