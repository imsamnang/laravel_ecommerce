<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreePostsTable extends Migration
{

  public function up()
  {
    Schema::create('free_posts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('category_id')->unsigned();
      $table->integer('parent_id')->unsigned();
      $table->string('title',150);
      $table->string('bedroom')->nullable();
      $table->string('bathroom')->nullable();
      $table->string('facing')->nullable();
      $table->string('size');
      $table->string('price ');
      $table->text('description')->nullable();
      $table->string('gallery_id')->unsigned();
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
      Schema::dropIfExists('free_posts');
  }
}
