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
                'updated_at' => '2020-07-17 21:30:16',
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
                'order' => 9,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-07-17 21:30:11',
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
                'order' => 7,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-07-17 21:30:11',
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
                'order' => 6,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-07-17 21:30:11',
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
                'order' => 12,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-07-17 21:30:11',
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
                'order' => 13,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-07-17 21:30:11',
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
                'order' => 10,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-07-17 21:30:11',
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
                'order' => 11,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-07-17 21:30:11',
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
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Webinários',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 2,
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-07-03 22:51:39',
                'route' => 'voyager.webinar-contents.edit',
                'parameters' => '2',
            ),
            14 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Páginas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-06-12 22:35:41',
                'updated_at' => '2020-07-17 21:30:11',
                'route' => NULL,
                'parameters' => '',
            ),
            15 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Webinários',
                'url' => '/admin/webinars',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 2,
                'created_at' => '2020-06-17 21:57:18',
                'updated_at' => '2020-07-03 22:51:32',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Podcasts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 3,
                'created_at' => '2020-06-19 20:46:15',
                'updated_at' => '2020-07-03 22:51:32',
                'route' => 'voyager.podcasts.index',
                'parameters' => 'null',
            ),
            17 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Podcasts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 3,
                'created_at' => '2020-06-19 20:50:29',
                'updated_at' => '2020-07-03 22:51:39',
                'route' => 'voyager.podcast-contents.edit',
                'parameters' => '1',
            ),
            18 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Categorias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-07-17 21:30:11',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            19 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Boas Práticas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 15,
                'order' => 4,
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-07-03 22:51:32',
                'route' => 'voyager.guidelines.index',
                'parameters' => NULL,
            ),
            20 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Boas Práticas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 4,
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-07-03 22:51:39',
                'route' => 'voyager.guideline-contents.edit',
                'parameters' => '1',
            ),
            21 => 
            array (
                'id' => 25,
                'menu_id' => 1,
                'title' => 'Autores',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-07-17 21:30:11',
                'route' => 'voyager.authors.index',
                'parameters' => 'null',
            ),
            22 => 
            array (
                'id' => 26,
                'menu_id' => 1,
                'title' => 'Entrevistas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 15,
                'order' => 5,
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-07-03 22:51:32',
                'route' => 'voyager.interviews.index',
                'parameters' => NULL,
            ),
            23 => 
            array (
                'id' => 27,
                'menu_id' => 1,
                'title' => 'Entrevista',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 5,
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-07-03 22:51:39',
                'route' => 'voyager.interview-contents.edit',
                'parameters' => '1',
            ),
            24 => 
            array (
                'id' => 28,
                'menu_id' => 1,
                'title' => 'Biblioteca',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 6,
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-07-03 22:51:32',
                'route' => 'voyager.articles.index',
                'parameters' => 'null',
            ),
            25 => 
            array (
                'id' => 29,
                'menu_id' => 1,
                'title' => 'Biblioteca',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 6,
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-07-03 22:51:39',
                'route' => 'voyager.article-contents.edit',
                'parameters' => '1',
            ),
            26 => 
            array (
                'id' => 30,
                'menu_id' => 1,
                'title' => 'Notícias',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 15,
                'order' => 7,
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-07-03 22:51:32',
                'route' => 'voyager.news.index',
                'parameters' => NULL,
            ),
            27 => 
            array (
                'id' => 31,
                'menu_id' => 1,
                'title' => 'Notícias',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 7,
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-07-03 22:51:39',
                'route' => 'voyager.new-contents.edit',
                'parameters' => '2',
            ),
            28 => 
            array (
                'id' => 32,
                'menu_id' => 1,
                'title' => 'Trilhas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 15,
                'order' => 1,
                'created_at' => '2020-07-02 21:53:18',
                'updated_at' => '2020-08-05 17:50:39',
                'route' => 'voyager.trails.index',
                'parameters' => 'null',
            ),
            29 => 
            array (
                'id' => 33,
                'menu_id' => 1,
                'title' => 'Trilhas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 1,
                'created_at' => '2020-07-02 23:15:13',
                'updated_at' => '2020-07-03 22:53:24',
                'route' => 'voyager.trail-contents.edit',
                'parameters' => '1',
            ),
            30 => 
            array (
                'id' => 34,
                'menu_id' => 1,
                'title' => 'Banners',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-star-two',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 21:30:49',
                'route' => 'voyager.banners.edit',
                'parameters' => '1',
            ),
            31 => 
            array (
                'id' => 35,
                'menu_id' => 1,
                'title' => 'Depoimentos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-receipt',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 21:32:20',
                'route' => 'voyager.testimonials.index',
                'parameters' => 'null',
            ),
            32 => 
            array (
                'id' => 36,
                'menu_id' => 1,
                'title' => 'Conteúdos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-08-05 17:54:42',
                'updated_at' => '2020-08-05 18:01:45',
                'route' => NULL,
                'parameters' => '',
            ),
            33 => 
            array (
                'id' => 37,
                'menu_id' => 1,
                'title' => 'Webinários',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 2,
                'created_at' => '2020-08-05 17:55:36',
                'updated_at' => '2020-08-05 18:00:46',
                'route' => 'voyager.webinars.index',
                'parameters' => NULL,
            ),
            34 => 
            array (
                'id' => 38,
                'menu_id' => 1,
                'title' => 'Trilhas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 1,
                'created_at' => '2020-08-05 17:57:34',
                'updated_at' => '2020-08-05 18:00:46',
                'route' => 'voyager.trails.index',
                'parameters' => NULL,
            ),
            35 => 
            array (
                'id' => 39,
                'menu_id' => 1,
                'title' => 'Podcasts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 3,
                'created_at' => '2020-08-05 17:58:00',
                'updated_at' => '2020-08-05 17:59:50',
                'route' => 'voyager.podcasts.index',
                'parameters' => NULL,
            ),
            36 => 
            array (
                'id' => 40,
                'menu_id' => 1,
                'title' => 'Boas Práticas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 4,
                'created_at' => '2020-08-05 17:58:29',
                'updated_at' => '2020-08-05 18:00:13',
                'route' => 'voyager.guidelines.index',
                'parameters' => NULL,
            ),
            37 => 
            array (
                'id' => 41,
                'menu_id' => 1,
                'title' => 'Entrevistas',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 5,
                'created_at' => '2020-08-05 17:59:01',
                'updated_at' => '2020-08-05 18:00:21',
                'route' => 'voyager.interviews.index',
                'parameters' => NULL,
            ),
            38 => 
            array (
                'id' => 42,
                'menu_id' => 1,
                'title' => 'Biblioteca',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 7,
                'created_at' => '2020-08-05 17:59:14',
                'updated_at' => '2020-08-05 18:00:42',
                'route' => 'voyager.articles.index',
                'parameters' => NULL,
            ),
            39 => 
            array (
                'id' => 43,
                'menu_id' => 1,
                'title' => 'Notícias',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 36,
                'order' => 6,
                'created_at' => '2020-08-05 17:59:31',
                'updated_at' => '2020-08-05 18:00:32',
                'route' => 'voyager.news.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}