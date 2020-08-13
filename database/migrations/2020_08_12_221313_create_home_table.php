<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('first_title')->nullable();
            $table->text('first_body')->nullable();
            $table->string('first_image')->nullable();
            $table->text('second_title')->nullable();
            $table->text('second_body')->nullable();
            $table->string('second_image')->nullable();
            $table->text('third_title')->nullable();
            $table->text('third_body')->nullable();
            $table->string('third_image')->nullable();
            $table->string('image_testimonial')->nullable();
            $table->text('meta_description', 16777215)->nullable();
            $table->string('seo_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home');
    }
}
