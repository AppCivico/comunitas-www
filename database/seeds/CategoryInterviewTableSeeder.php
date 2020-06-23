<?php

use Illuminate\Database\Seeder;

class CategoryInterviewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_interview')->delete();
        
        \DB::table('category_interview')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 3,
                'interview_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}