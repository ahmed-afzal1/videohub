<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('plan_id');
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->double('order_amount')->default(0);
            $table->string('payment_type');
            $table->string('order_number');
            $table->string('title');
            $table->string('payment_status');
            $table->string('txnid');
            $table->string('charge_id');
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
