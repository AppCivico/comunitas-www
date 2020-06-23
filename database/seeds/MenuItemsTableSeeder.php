<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-19 21:31:02',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-22 22:13:43',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-22 22:13:43',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-11 18:45:40',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-11 18:45:40',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-11 18:45:40',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-11 18:45:40',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2020-05-26 21:55:41',
                'updated_at' => '2020-06-11 18:45:40',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Conteúdos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-19 21:31:02',
                'route' => 'voyager.contents.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Webinários',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 1,
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-23 15:58:56',
                'route' => 'voyager.webinars.edit',
                'parameters' => '1',
            ),
            15 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Páginas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-06-12 22:35:41',
                'updated_at' => '2020-06-23 15:56:03',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Webinários',
                'url' => '/admin/webinars',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 1,
                'created_at' => '2020-06-17 21:57:18',
                'updated_at' => '2020-06-17 21:58:08',
                'route' => NULL,
                'parameters' => '',
            ),
            17 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Podcasts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 2,
                'created_at' => '2020-06-19 20:46:15',
                'updated_at' => '2020-06-19 21:32:11',
                'route' => 'voyager.podcasts.index',
                'parameters' => 'null',
            ),
            18 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Podcasts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 2,
                'created_at' => '2020-06-19 20:50:29',
                'updated_at' => '2020-06-23 15:59:40',
                'route' => 'voyager.podcast-contents.edit',
                'parameters' => '1',
            ),
            19 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Categorias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Boas Práticas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 15,
                'order' => 3,
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:10:09',
                'route' => 'voyager.guidelines.index',
                'parameters' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Boas Práticas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 3,
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-23 15:59:58',
                'route' => 'voyager.guideline-contents.edit',
                'parameters' => '1',
            ),
            22 => 
            array (
                'id' => 25,
                'menu_id' => 1,
                'title' => 'Authors',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 22:13:44',
                'route' => 'voyager.authors.index',
                'parameters' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'menu_id' => 1,
                'title' => 'Entrevistas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 15,
                'order' => 4,
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 22:13:25',
                'route' => 'voyager.interviews.index',
                'parameters' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'menu_id' => 1,
                'title' => 'Entrevista',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 4,
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-23 16:00:13',
                'route' => 'voyager.interview-contents.edit',
                'parameters' => '1',
            ),
            25 => 
            array (
                'id' => 28,
                'menu_id' => 1,
                'title' => 'Biblioteca',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 5,
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 22:13:32',
                'route' => 'voyager.articles.index',
                'parameters' => 'null',
            ),
            26 => 
            array (
                'id' => 29,
                'menu_id' => 1,
                'title' => 'Biblioteca',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 5,
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-23 16:00:27',
                'route' => 'voyager.article-contents.edit',
                'parameters' => '1',
            ),
            27 => 
            array (
                'id' => 30,
                'menu_id' => 1,
                'title' => 'Notícias',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 15,
                'order' => 6,
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-23 15:53:49',
                'route' => 'voyager.news.index',
                'parameters' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'menu_id' => 1,
                'title' => 'Notícias',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 6,
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-23 16:00:42',
                'route' => 'voyager.new-contents.edit',
                'parameters' => '1',
            ),
        ));
        
        
    }
}