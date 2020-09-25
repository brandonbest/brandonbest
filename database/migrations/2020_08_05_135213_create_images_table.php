<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->string('src')->nullable();
            $table->string('size')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->boolean('active')->default('1');
            $table->timestamps();
        });

        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->boolean('active')->default('1');
            $table->timestamps();
        });

        Schema::create('file_images', function (Blueprint $table) {
            $table->id();
            $this->unsignedBigInteger('file_id');
            $this->unsignedBigInteger('image_id');
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
        Schema::dropIfExists('files');
    }
}
