<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section')->nullable();
            $table->string('icon', 75)->nullable();
            $table->integer('sort');
            $table->string('description', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('skill_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->unsignedBigInteger('skill_section_id');
            $table->string('icon', 75)->nullable();
            $table->integer('sort');
            $table->string('description', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill')->nullable();
            $table->integer('skill_level')->default(100);
            $table->string('description', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('skill_categories_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('skill_category_id');
            $table->integer('sort');
            $table->timestamps();

            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->foreign('skill_category_id')->references('id')->on('skill_categories')->onDelete('cascade');
        });

        Schema::create('skill_line_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_id');
            $table->string('line_item')->nullable();
            $table->string('description', 500)->nullable();
            $table->integer('sort');
            $table->timestamps();

            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_line_items');
        Schema::dropIfExists('skill_categories_pivot');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('skill_categories');
        Schema::dropIfExists('skill_sections');
    }
}
