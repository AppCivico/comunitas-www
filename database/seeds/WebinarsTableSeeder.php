<?php

use Illuminate\Database\Seeder;

class WebinarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('webinars')->delete();
        
        \DB::table('webinars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'category_id' => NULL,
                'title' => 'Meu primeiro webinário',
                'featured' => NULL,
                'seo_title' => 'Conheça meu primeiro webinário',
                'excerpt' => 'Esse é o resumo que vai aparecer na listagem dos webinários lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et',
                'body' => '<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>
<p>&nbsp;</p>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>',
                'image' => 'webinars/June2020/dZGlT0emt5TUeaTK4gLu.jpg',
                'slug' => 'meu-primeiro-webinario',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim.',
                'meta_keywords' => NULL,
                'status' => 'DRAFT',
                'created_at' => '2020-06-11 20:17:53',
                'updated_at' => '2020-06-12 23:17:32',
                'order' => 2,
                'image_alt' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'author_id' => 1,
                'category_id' => NULL,
                'title' => 'Meu segundo webinário',
                'featured' => NULL,
                'seo_title' => 'Conheça meu primeiro webinário',
                'excerpt' => 'Esse é o resumo que vai aparecer na listagem dos webinários lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et',
                'body' => '<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>
<p>&nbsp;</p>
<p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam etlorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et</p>',
                'image' => 'webinars/June2020/dZGlT0emt5TUeaTK4gLu.jpg',
                'slug' => 'meu-segundo-webinario',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim.',
                'meta_keywords' => NULL,
                'status' => 'DRAFT',
                'created_at' => '2020-06-11 20:17:53',
                'updated_at' => '2020-06-12 23:18:03',
                'order' => 1,
                'image_alt' => 'Show do barões da pisadinha',
            ),
            2 => 
            array (
                'id' => 4,
                'author_id' => 1,
                'category_id' => NULL,
                'title' => 'Perferendis expedita',
                'featured' => NULL,
                'seo_title' => 'Veniam officiis har',
                'excerpt' => 'Elit et voluptatibu',
                'body' => '<p>Sed vel ab cupiditat.</p>',
                'image' => 'webinars/June2020/b774uRK5RaOPn1fWVnLc.jpg',
                'slug' => 'Aliquam ut earum dol',
                'meta_description' => 'Laborum sint officia',
                'meta_keywords' => NULL,
                'status' => 'PUBLISHED',
                'created_at' => '2020-06-15 22:46:17',
                'updated_at' => '2020-06-15 22:46:17',
                'order' => NULL,
                'image_alt' => 'Veniam numquam illo',
            ),
        ));
        
        
    }
}