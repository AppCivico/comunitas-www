<?php

use Illuminate\Database\Seeder;

class CategoryGuidelineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_guideline')->delete();
        
        \DB::table('category_guideline')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 4,
                'guideline_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}