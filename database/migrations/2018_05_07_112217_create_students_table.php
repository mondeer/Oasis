<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
  
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('first_name');
          $table->string('middle_name');
          $table->string('last_name');
          $table->string('national_id')->unique();
          $table->enum('gender', [ 'Female', 'Male', 'Others'])->nullable();
          $table->string('dob');
          $table->string('reg_no')->unique();
          $table->string('course');
          $table->string('department');
          $table->string('email');
          $table->string('mobile');
          $table->string('postal_address');
          $table->string('next_of_kin');
          $table->string('next_of_kin_contact');
          $table->string('guardian');
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
