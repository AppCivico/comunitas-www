<?php

use Illuminate\Database\Seeder;

class InterviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('interviews')->delete();
        
        \DB::table('interviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'PUBLISHED',
                'title' => 'Título da primeira entrevista',
                'slug' => 'titulo-da-primeira-entrevista',
                'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim. Pellentesque eget justo porttitor urna dictum fermentum sit amet sed mauris. Praesent molestie vestibulum erat ac rhoncus. Aenean nunc risus, accumsan nec ipsum et, convallis sollicitudin dui. Proin dictum quam a semper.',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Sed in tellus interdum eros vulputate placerat sed non enim. Pellentesque eget justo porttitor urna dictum fermentum sit amet sed mauris. Praesent molestie vestibulum erat ac rhoncus. Aenean nunc risus, accumsan nec ipsum et, convallis sollicitudin dui. Proin dictum quam a semper malesuada. Etiam porta sit amet risus quis porta. Nulla facilisi. Cras at interdum ante. Ut gravida pharetra ligula vitae malesuada. Sed eget libero et arcu tempor tincidunt in ac lectus. Maecenas vitae felis enim. In in tellus consequat, condimentum eros vitae, lacinia risus. Sed vehicula sem sed risus volutpat elementum.</p>
<p>&nbsp;</p>
<p>Nunc accumsan tempus nunc ac aliquet. Integer non ullamcorper eros, in rutrum velit. Proin cursus orci sit amet lobortis iaculis. Praesent condimentum eget felis ut laoreet. Aliquam sodales dolor id mi iaculis, non fermentum leo viverra. Aenean aliquet condimentum placerat. Aenean aliquet diam arcu. Curabitur ac ligula sem. Mauris tincidunt mauris at ligula tincidunt interdum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus sagittis, eros ut iaculis varius, lorem nibh ullamcorper sapien, nec posuere justo massa quis ligula. Curabitur eleifend quis sapien egestas tincidunt. Nulla ornare, purus eget porttitor facilisis, lorem urna semper erat, non placerat orci est lobortis mi. Curabitur convallis, urna a tincidunt accumsan, lectus orci dictum turpis, vitae pretium leo tellus a sem. Donec vulputate erat quis turpis luctus, at aliquam massa vulputate.</p>
<p>&nbsp;</p>
<p>Phasellus vestibulum, purus in vestibulum tempor, est ligula rutrum justo, hendrerit malesuada diam lacus quis massa. Ut fringilla fringilla mattis. Aenean nisl lectus, tempor et sapien at, venenatis tempus magna. Integer sollicitudin rhoncus augue vel pretium. Etiam nisl velit, condimentum at facilisis sagittis, vehicula a diam. Phasellus congue vehicula nisi, a vulputate augue suscipit non. Etiam condimentum placerat arcu a dapibus. Phasellus adipiscing, est vel aliquet placerat, justo lacus commodo nunc, nec pretium arcu mi nec risus. Praesent a urna semper, suscipit tellus ac, consectetur metus. Integer at fringilla magna, ut gravida lorem. Sed molestie non augue in faucibus. Phasellus at dui sem. Morbi rutrum nulla sit amet elit dapibus tincidunt.</p>
<p>&nbsp;</p>
<p>Vestibulum varius ultrices mauris eget eleifend. Morbi sagittis nisi nec leo mollis, sed laoreet mi facilisis. Curabitur non laoreet turpis. Vivamus tincidunt orci turpis, et sodales urna egestas ut. Vestibulum.</p>',
                'image' => 'interviews/June2020/Elbt5nidnYVPoh0Alzgc.jpg',
                'image_alt' => 'texto alternativo',
                'seo_title' => 'Título de SEO',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam, ornare sed lorem sed, hendrerit auctor dolor. Nulla viverra, nibh quis ultrices malesuada, ligula ipsum vulputate diam, aliquam egestas nibh ante vel dui. Se',
                'featured' => 'interviews/June2020/VGOzMyCsFluTttdTBSnq.jpg',
                'author_id' => 2,
                'category_id' => NULL,
                'created_at' => '2020-06-22 20:49:00',
                'updated_at' => '2020-06-22 21:11:07',
                'order' => NULL,
            ),
        ));
        
        
    }
}