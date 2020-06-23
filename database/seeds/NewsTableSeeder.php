<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'DRAFT',
                'title' => 'Architecto sit est asd',
                'slug' => 'architecto-sit-est-asd',
                'external_link' => 'https://www.gazetadopovo.com.br/opiniao/artigos/fake-news-ou-desinformacao/',
                'image' => 'news/June2020/tmZEAE1nw7Us2JVWgpye.jpg',
                'image_alt' => 'Sed quis beatae occa',
                'created_at' => '2020-06-22 23:18:00',
                'updated_at' => '2020-06-23 00:01:17',
                'order' => NULL,
            ),
        ));
        
        
    }
}