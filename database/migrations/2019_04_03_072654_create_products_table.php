<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('category_id')->unsigned();
      $table->string('product_code')->nullable();
      $table->string('product_name',150)->nullable();
      $table->integer('qty')->nullable();
      $table->float('price')->nullable();
      $table->boolean('is_active')->default(0);
      $table->text('description')->nullable();
      $table->string('image')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('products');
  }
}
