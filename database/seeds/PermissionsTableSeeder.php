<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-26 21:55:38',
                'updated_at' => '2020-05-26 21:55:38',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-26 21:55:39',
                'updated_at' => '2020-05-26 21:55:39',
            ),
            25 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:41',
                'updated_at' => '2020-05-26 21:55:41',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'browse_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'read_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'edit_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'add_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'delete_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'browse_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'read_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'edit_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'add_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'delete_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'browse_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'read_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'edit_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'add_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'delete_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            51 => 
            array (
                'id' => 57,
                'key' => 'browse_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            52 => 
            array (
                'id' => 58,
                'key' => 'read_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            53 => 
            array (
                'id' => 59,
                'key' => 'edit_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            54 => 
            array (
                'id' => 60,
                'key' => 'add_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            55 => 
            array (
                'id' => 61,
                'key' => 'delete_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            56 => 
            array (
                'id' => 62,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            57 => 
            array (
                'id' => 63,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            58 => 
            array (
                'id' => 64,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            59 => 
            array (
                'id' => 65,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            60 => 
            array (
                'id' => 66,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            61 => 
            array (
                'id' => 67,
                'key' => 'browse_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            62 => 
            array (
                'id' => 68,
                'key' => 'read_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            63 => 
            array (
                'id' => 69,
                'key' => 'edit_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            64 => 
            array (
                'id' => 70,
                'key' => 'add_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            65 => 
            array (
                'id' => 71,
                'key' => 'delete_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            66 => 
            array (
                'id' => 72,
                'key' => 'browse_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            67 => 
            array (
                'id' => 73,
                'key' => 'read_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            68 => 
            array (
                'id' => 74,
                'key' => 'edit_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            69 => 
            array (
                'id' => 75,
                'key' => 'add_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            70 => 
            array (
                'id' => 76,
                'key' => 'delete_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
        ));
        
        
    }
}