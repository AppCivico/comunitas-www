<?php

use Illuminate\Database\Seeder;

class CategoryNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_news')->delete();
        
        \DB::table('category_news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'news_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 3,
                'news_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}