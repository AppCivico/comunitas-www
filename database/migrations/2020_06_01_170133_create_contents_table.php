<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
			$table->increments('id');
			$table->string('type');
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->integer('author_id')->nullable();
            $table->string('duration')->nullable();
            $table->integer('person_id')->nullable();
			$table->string('title');
            $table->text('iframe')->nullable();
			$table->string('featured')->nullable();
			$table->string('seo_title')->nullable();
			$table->text('excerpt', 65535)->nullable();
			$table->text('external_link')->nullable();
			$table->text('body', 65535)->nullable();
			$table->string('image')->nullable();
			$table->string('slug', 250);
			$table->text('meta_description', 65535)->nullable();
			$table->timestamps();
			$table->integer('order')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
