<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    public function up()
    {
      Schema::create('coupons', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('promotion_id')->unsigned();
        $table->string('coupon');
        $table->datetime('expired_date')->nullable();
        $table->softDeletes();
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('coupons');
    }

}
