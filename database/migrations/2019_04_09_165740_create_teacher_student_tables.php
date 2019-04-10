<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherStudentTables extends Migration
{
    public function up()
    {
        Schema::create('teacher', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('student', function(Blueprint $table){
            $table->increments('id');
            $table->integer('teacher_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_student_tables');        
    }
}
