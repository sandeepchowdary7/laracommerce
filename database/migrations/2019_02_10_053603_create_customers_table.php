<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->string('country');
            $table->string('number');
            $table->string('email');
            $table->string('password');
            $table->string('credit_card');
            $table->integer('credit_card_type_id');
            $table->string('card_exp_mo');
            $table->string('card_exp_yr');
            $table->string('billing_address1');
            $table->string('billing_address2');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_postcode');
            $table->string('billing_country');
            $table->string('ship_address1');
            $table->string('ship_address2');
            $table->string('ship_city');
            $table->string('ship_state');
            $table->string('ship_postcode');
            $table->string('ship_country');
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
