<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableSocialToAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->string('facebook')->nullable()->change();
            $table->string('linkedin')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('youtube')->nullable()->change();
            $table->string('instagram')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->string('facebook')->nullable(false)->change();
            $table->string('linkedin')->nullable(false)->change();
            $table->string('twitter')->nullable(false)->change();
            $table->string('youtube')->nullable(false)->change();
            $table->string('instagram')->nullable(false)->change();
        });
    }
}
