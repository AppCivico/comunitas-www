<?php

use Illuminate\Database\Seeder;

class CategoryPodcastTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_podcast')->delete();
        
        \DB::table('category_podcast')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 2,
                'podcast_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 6,
                'podcast_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}