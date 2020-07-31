<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('canvas_id')->unique();
            $table->text('name');
            $table->text('avatar_image_url');
            $table->text('title');
            $table->text('bio');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('instagram');
            $table->timestamp('created_at_canvas');
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
        Schema::dropIfExists('persons');
    }
}
