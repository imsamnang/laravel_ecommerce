<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{

  public function up()
  {
    Schema::create('promotions', function (Blueprint $table) {
      $table->increments('id');
      $table->string('promotion_name')->nullable();
      $table->text('description')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('promotions');
  }
}
