<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductGalleriesTable extends Migration
{

  public function up()
  {
    Schema::create('product_galleries', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('product_id')->unsigned();
      $table->string('gallery_image')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }


  public function down()
  {
    Schema::dropIfExists('product_galleries');
  }
}
