<?php

use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_category')->delete();
        
        \DB::table('article_category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 3,
                'article_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}