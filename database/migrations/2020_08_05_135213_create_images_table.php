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
            $table->unsignedBigInteger('image_quality_id')->nullable();
            $table->foreign('image_quality_id')->references('id')->on('image_quality')->onDelete('cascade');

            $table->unsignedBigInteger('parent_image_id')->nullable();

            $table->boolean('active')->default('1');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('image_quality', function (Blueprint $table) {
            $table->id();
            $table->string('quality');
        });

        Schema::create('file_types', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('slug')->nullable();
        });

        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('path', 1000)->nullable();
            $table->string('url', 1000)->nullable();
            $table->unsignedBigInteger('file_type_id')->nullable();
            $table->foreign('file_type_id')->references('id')->on('files')->onDelete('cascade');


            $table->string('size')->nullable();
            $table->boolean('active')->default('1');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('file_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('file_id');
            $table->unsignedBigInteger('image_id');
            $table->integer('sort')->default('0');
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
        Schema::dropIfExists('file_images');
        Schema::dropIfExists('file_types');
    }
}
