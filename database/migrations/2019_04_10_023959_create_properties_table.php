<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
  public function up()
  {
    Schema::create('properties', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->integer('category_id')->unsigned();
      $table->integer('parent_id')->unsigned();
      $table->string('title',150);
      $table->string('size');
      $table->float('price');
      $table->text('description')->nullable();
      $table->integer('gallery_id')->unsigned();
      $table->string('name');
      $table->string('phone');
      $table->string('email')->nullable();
      $table->string('province');
      $table->string('district');
      $table->string('commune');
      $table->text('location')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('properties');
  }
}
