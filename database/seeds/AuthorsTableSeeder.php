<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authors')->delete();
        
        \DB::table('authors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Edu Ruiz',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh',
                'image' => 'authors/June2020/CUS5K4GV9WBW6rHiUz1J.jpg',
                'facebook' => 'https://facebook.com/eduruiz',
                'linkedin' => 'https://linkedi.com/eduruiz',
                'twitter' => 'https://twitter.com/eduruiz',
                'youtube' => 'https://youtube.com/eduruiz',
                'instagram' => 'https://instagram.com/eduruiz',
                'created_at' => '2020-06-18 00:32:00',
                'updated_at' => '2020-06-18 16:23:18',
            ),
        ));
        
        
    }
}