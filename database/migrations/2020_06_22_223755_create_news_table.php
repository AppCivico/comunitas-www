<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
			$table->increments('id');
			$table->string('type')->default('new');
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->string('title');
			$table->string('slug', 250)->unique('news_slug_unique');
			$table->string('external_link');
			$table->string('image')->nullable();
			$table->string('image_alt')->nullable();
			$table->timestamps();
			$table->integer('order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
