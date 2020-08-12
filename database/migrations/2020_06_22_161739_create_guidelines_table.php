<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guidelines', function (Blueprint $table) {
			$table->increments('id');
			$table->string('type')->default('guideline');
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->string('title');
			$table->string('slug', 250)->unique('guidelines_slug_unique');
			$table->text('excerpt', 65535)->nullable();
			$table->text('body', 65535);
			$table->string('image')->nullable();
			$table->string('image_alt')->nullable();
			$table->string('seo_title')->nullable();
			$table->text('meta_description', 65535)->nullable();
			$table->text('featured')->nullable();
			$table->integer('author_id')->nullable();
			$table->integer('category_id')->nullable();
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
        Schema::dropIfExists('guidelines');
    }
}
