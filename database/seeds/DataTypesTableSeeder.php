<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'webinars',
                'slug' => 'webinars',
                'display_name_singular' => 'Webinário',
                'display_name_plural' => 'Webinários',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Webinar',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-08-04 15:17:22',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'types',
                'slug' => 'types',
                'display_name_singular' => 'Type',
                'display_name_plural' => 'Types',
                'icon' => NULL,
                'model_name' => 'App\\Type',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 20:00:37',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'webinar_contents',
                'slug' => 'webinar-contents',
                'display_name_singular' => 'Webinário',
                'display_name_plural' => 'Webinários',
                'icon' => NULL,
                'model_name' => 'App\\WebinarContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-19 21:53:58',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'podcasts',
                'slug' => 'podcasts',
                'display_name_singular' => 'Podcast',
                'display_name_plural' => 'Podcasts',
                'icon' => NULL,
                'model_name' => 'App\\Podcast',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-19 20:46:14',
                'updated_at' => '2020-08-04 22:45:06',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'podcast_contents',
                'slug' => 'podcast-contents',
                'display_name_singular' => 'Podcasts Conteúdo',
                'display_name_plural' => 'Podcasts Conteúdos',
                'icon' => NULL,
                'model_name' => 'App\\PodcastContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-19 20:50:29',
                'updated_at' => '2020-06-19 21:32:58',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Categoria',
                'display_name_plural' => 'Categorias',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-25 01:16:52',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'guidelines',
                'slug' => 'guidelines',
                'display_name_singular' => 'Boa Prática',
                'display_name_plural' => 'Boas Práticas',
                'icon' => NULL,
                'model_name' => 'App\\Guideline',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-08-04 22:47:43',
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'guideline_contents',
                'slug' => 'guideline-contents',
                'display_name_singular' => 'Boas Práticas Conteúdo',
                'display_name_plural' => 'Boas Práticas Conteúdos',
                'icon' => NULL,
                'model_name' => 'App\\GuidelineContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:29:42',
            ),
            13 => 
            array (
                'id' => 19,
                'name' => 'authors',
                'slug' => 'authors',
                'display_name_singular' => 'Autor',
                'display_name_plural' => 'Autores',
                'icon' => 'voyager-person',
                'model_name' => 'App\\Author',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-26 23:48:49',
            ),
            14 => 
            array (
                'id' => 21,
                'name' => 'interviews',
                'slug' => 'interviews',
                'display_name_singular' => 'Entrevista',
                'display_name_plural' => 'Entrevistas',
                'icon' => NULL,
                'model_name' => 'App\\Interview',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-08-04 22:50:44',
            ),
            15 => 
            array (
                'id' => 22,
                'name' => 'interview_contents',
                'slug' => 'interview-contents',
                'display_name_singular' => 'Entrevista Conteúdo',
                'display_name_plural' => 'Entrevista Conteúdos',
                'icon' => NULL,
                'model_name' => 'App\\InterviewContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            16 => 
            array (
                'id' => 23,
                'name' => 'articles',
                'slug' => 'articles',
                'display_name_singular' => 'Biblioteca',
                'display_name_plural' => 'Bibliotecas',
                'icon' => NULL,
                'model_name' => 'App\\Article',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-08-04 22:51:27',
            ),
            17 => 
            array (
                'id' => 25,
                'name' => 'article_contents',
                'slug' => 'article-contents',
                'display_name_singular' => 'Artigos Conteúdo',
                'display_name_plural' => 'Artigos Conteúdos',
                'icon' => NULL,
                'model_name' => 'App\\ArticleContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:54:44',
            ),
            18 => 
            array (
                'id' => 29,
                'name' => 'new_contents',
                'slug' => 'new-contents',
                'display_name_singular' => 'Notícias Conteúdo',
                'display_name_plural' => 'Notícias Conteúdos',
                'icon' => NULL,
                'model_name' => 'App\\NewContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:04:29',
            ),
            19 => 
            array (
                'id' => 35,
                'name' => 'news',
                'slug' => 'news',
                'display_name_singular' => 'Notícia',
                'display_name_plural' => 'Notícias',
                'icon' => NULL,
                'model_name' => 'App\\News',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-06-22 23:55:05',
                'updated_at' => '2020-08-04 22:51:53',
            ),
            20 => 
            array (
                'id' => 36,
                'name' => 'trails',
                'slug' => 'trails',
                'display_name_singular' => 'Trilha',
                'display_name_plural' => 'Trilhas',
                'icon' => NULL,
                'model_name' => 'App\\Trail',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-07-02 21:53:18',
                'updated_at' => '2020-08-04 15:18:35',
            ),
            21 => 
            array (
                'id' => 38,
                'name' => 'trail_contents',
                'slug' => 'trail-contents',
                'display_name_singular' => 'Trail Content',
                'display_name_plural' => 'Trail Contents',
                'icon' => NULL,
                'model_name' => 'App\\TrailContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-07-02 23:15:13',
                'updated_at' => '2020-07-02 23:15:13',
            ),
            22 => 
            array (
                'id' => 39,
                'name' => 'banners',
                'slug' => 'banners',
                'display_name_singular' => 'Banner',
                'display_name_plural' => 'Banners',
                'icon' => NULL,
                'model_name' => 'App\\Banner',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 21:52:33',
            ),
            23 => 
            array (
                'id' => 41,
                'name' => 'testimonials',
                'slug' => 'testimonials',
                'display_name_singular' => 'Depoimento',
                'display_name_plural' => 'Depoimentos',
                'icon' => NULL,
                'model_name' => 'App\\Testimonial',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"author","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 20:56:16',
            ),
        ));
        
        
    }
}