<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('author_id')->default(1);
			$table->integer('category_id')->nullable();
			$table->string('title');
			$table->string('seo_title')->nullable();
			$table->text('excerpt', 65535)->nullable();
			$table->text('body', 65535);
			$table->string('image')->nullable();
			$table->string('slug', 250)->unique('posts_slug_unique');
			$table->text('meta_description', 65535)->nullable();
			$table->text('meta_keywords', 65535)->nullable();
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->boolean('featured')->default(0);
			$table->timestamps();
			$table->integer('order')->nullable()->unique();
			$table->integer('type_id');
			$table->string('image_alt')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contents');
	}

}
