<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->string('order_number');
            $table->unsignedInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->string('order_date');
            $table->string('ship_date');
            $table->string('required_date');
            $table->unsignedInteger('shipper_id');
            $table->foreign('shipper_id')->references('id')->on('shippers')->onDelete('cascade');
            $table->string('freight');
            $table->string('sales_tax');
            $table->string('transction_status');
            $table->string('err_loc');
            $table->string('err_msg');
            $table->string('paid');
            $table->string('payment_date');
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
        Schema::dropIfExists('orders');
    }
}
