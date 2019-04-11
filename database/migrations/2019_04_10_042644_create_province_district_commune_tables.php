<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinceDistrictCommuneTables extends Migration
{
  public function up()
  {
    Schema::create('provinces', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name_en');
        $table->string('name_kh');
        $table->timestamps();
    });
    Schema::create('districts', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('province_id');            
        $table->string('name_en');
        $table->string('name_kh');
        $table->timestamps();
    });
    Schema::create('communes', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('district_id');
        $table->string('name_en');
        $table->string('name_kh');
        $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('provinces');
    Schema::drop('districts');
    Schema::drop('communes');
  }
}
