<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{

  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned()->nullable();
      $table->integer('deliver_id')->unsigned()->nullable();
      $table->integer('payment_id')->nullable();
      $table->integer('status_id')->nullable();
      $table->integer('coupon_Id')->nullable();
      $table->datetime('transaction_date')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
      Schema::dropIfExists('orders');
  }
}
