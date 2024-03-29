<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{

  public function up()
  {
    Schema::create('order_items', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('order_id')->unsigned();
      $table->integer('product_id')->unsigned();
      $table->integer('color_id')->unsigned();
      $table->integer('qty')->nullable();
      $table->float('price')->nullable();
      $table->float('amount')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('order_items');
  }
}
