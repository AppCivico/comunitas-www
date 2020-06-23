<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'PUBLISHED',
                'title' => 'Artigo de teste para biblioteca',
                'slug' => 'artigo-de-teste-para-biblioteca',
                'external_link' => 'http://africau.edu/images/default/sample.pdf',
                'image' => 'articles/June2020/DtRKKnNL3T96hLMSXn6M.jpg',
                'image_alt' => 'texto alternativo',
                'created_at' => '2020-06-22 22:05:29',
                'updated_at' => '2020-06-22 22:05:29',
                'order' => NULL,
            ),
        ));
        
        
    }
}