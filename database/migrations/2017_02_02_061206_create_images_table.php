<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

    public function up()
    {
        Schema::create('images', function (Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->integer('size')->nullable();
            $table->string('path');
            $table->integer('imageable_id')->index();
            $table->string('imageable_type', 50)->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
