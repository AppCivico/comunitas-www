<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order' => 1,
                'name' => 'Category 1',
                'slug' => 'category-1',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            1 => 
            array (
                'id' => 2,
                'order' => 1,
                'name' => 'Category 2',
                'slug' => 'category-2',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            2 => 
            array (
                'id' => 3,
                'order' => 1,
                'name' => 'Gestão de pessoas',
                'slug' => 'gestao-de-pessoas',
                'created_at' => '2020-06-12 01:05:17',
                'updated_at' => '2020-06-12 01:05:17',
            ),
            3 => 
            array (
                'id' => 4,
                'order' => NULL,
                'name' => 'teste',
                'slug' => NULL,
                'created_at' => '2020-06-12 01:20:01',
                'updated_at' => '2020-06-12 01:20:01',
            ),
            4 => 
            array (
                'id' => 5,
                'order' => 1,
                'name' => 'minha nova catiguria',
                'slug' => 'minha-nova-catiguria',
                'created_at' => '2020-06-12 01:43:25',
                'updated_at' => '2020-06-12 01:43:25',
            ),
            5 => 
            array (
                'id' => 6,
                'order' => 1,
                'name' => 'nova categoria do edgard',
                'slug' => NULL,
                'created_at' => '2020-06-23 15:46:57',
                'updated_at' => '2020-06-23 15:46:57',
            ),
        ));
        
        
    }
}