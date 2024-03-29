<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{

  public function up()
  {
    Schema::create('colors', function (Blueprint $table) {
      $table->increments('id');
      $table->string('color_name');
      $table->text('description')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('colors');
  }
}
