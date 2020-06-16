<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 2,
                'order' => 1,
                'name' => 'Webinários',
                'slug' => 'webinarios',
                'created_at' => '2020-06-11 20:00:56',
                'updated_at' => '2020-06-11 20:00:56',
            ),
        ));
        
        
    }
}