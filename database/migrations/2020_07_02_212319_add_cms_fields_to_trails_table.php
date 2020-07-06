<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCmsFieldsToTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('trails')) {
            Schema::table('trails', function (Blueprint $table) {
                $table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT')->nullable();
                $table->string('slug', 250)->unique('trails_slug_unique')->nullable();
                $table->text('excerpt', 65535)->nullable();
                $table->text('body', 65535)->nullable();
                $table->string('image')->nullable();
                $table->string('image_alt')->nullable();
                $table->string('duration')->nullable();
                $table->string('seo_title')->nullable();
                $table->text('meta_description', 65535)->nullable();
                $table->text('featured')->nullable();
                $table->integer('person_id')->nullable();
                $table->integer('order')->nullable();
                $table->text('updated_at')->nullable();
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
        Schema::table('trails', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('slug');
            $table->dropColumn('excerpt');
            $table->dropColumn('body');
            $table->dropColumn('image');
            $table->dropColumn('image_alt');
            $table->dropColumn('duration');
            $table->dropColumn('seo_title');
            $table->dropColumn('meta_description');
            $table->dropColumn('featured');
            $table->dropColumn('person_id');
            $table->dropColumn('order');
            $table->dropColumn('updated_at');
        });
    }
}
