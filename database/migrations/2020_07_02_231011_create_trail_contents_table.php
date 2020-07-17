<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrailContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(!Schema::hasTable('trails')) {
            Schema::create('trail_contents', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('body', 16777215)->nullable();
                $table->string('image')->nullable();
                $table->text('meta_description', 16777215)->nullable();
                $table->string('seo_title')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trail_contents');
    }
}
