<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressesTable extends Migration
{
  public function up()
  {
    Schema::create('shipping_addresses', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('order_id')->undigned();
      $table->integer('customer_id')->unsigned();
      $table->string('name',100)->nullable();
      $table->string('phone',100)->nullable();
      $table->string('city',100)->nullable();
      $table->string('district',100)->nullable();
      $table->string('commune',100)->nullable();
      $table->string('village',100)->nullable();
      $table->string('postcode',100)->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('shipping_addresses');
  }
}
