<?php

use Illuminate\Database\Seeder;

class CategoryWebinarTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('category_webinar')->delete();

        \DB::table('category_webinar')->insert(array (
            0 =>
            array (
                'id' => 1,
                'category_id' => 1,
                'webinar_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'category_id' => 3,
                'webinar_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 4,
                'category_id' => 2,
                'webinar_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 5,
                'category_id' => 3,
                'webinar_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 6,
                'category_id' => 5,
                'webinar_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 7,
                'category_id' => 1,
                'webinar_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 8,
                'category_id' => 2,
                'webinar_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 9,
                'category_id' => 3,
                'webinar_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 10,
                'category_id' => 4,
                'webinar_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
