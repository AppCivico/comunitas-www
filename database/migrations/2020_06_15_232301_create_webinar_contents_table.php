<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebinarContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webinar_contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('body', 16777215)->nullable();
			$table->string('image')->nullable();
			$table->text('meta_description', 16777215)->nullable();
			$table->timestamps();
			$table->string('seo_title')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webinar_contents');
	}

}
