<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProductFavoritesTable extends Migration
{

  public function up()
  {
    Schema::create('customer_product_favorites', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('product_id')->unsigned();
      $table->integer('customer_id');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('customer_product_favorites');
  }
}
