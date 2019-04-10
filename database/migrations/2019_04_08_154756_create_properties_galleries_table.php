<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesGalleriesTable extends Migration
{
  public function up()
  {
    Schema::create('properties_galleries', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('property_id')->unsigned();
      $table->string('gallery_image')->nullable();
      $table->softDeletes();            
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('properties_galleries');
  }
}
