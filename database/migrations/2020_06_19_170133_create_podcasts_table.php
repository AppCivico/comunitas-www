<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('type')->default('podcast');
			$table->integer('author_id')->nullable();
			$table->integer('category_id')->nullable();
			$table->string('title');
            $table->text('iframe')->nullable();
			$table->string('featured')->nullable();
			$table->string('seo_title')->nullable();
			$table->text('excerpt', 65535)->nullable();
			$table->text('body', 65535);
			$table->string('image')->nullable();
			$table->string('slug', 250)->unique('podcasts_slug_unique');
			$table->text('meta_description', 65535)->nullable();
			$table->text('meta_keywords', 65535)->nullable();
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
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
        Schema::dropIfExists('podcasts');
    }
}
