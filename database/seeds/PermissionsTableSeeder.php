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
            71 => 
            array (
                'id' => 77,
                'key' => 'browse_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            72 => 
            array (
                'id' => 78,
                'key' => 'read_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            73 => 
            array (
                'id' => 79,
                'key' => 'edit_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            74 => 
            array (
                'id' => 80,
                'key' => 'add_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            75 => 
            array (
                'id' => 81,
                'key' => 'delete_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            76 => 
            array (
                'id' => 82,
                'key' => 'browse_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            77 => 
            array (
                'id' => 83,
                'key' => 'read_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            78 => 
            array (
                'id' => 84,
                'key' => 'edit_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            79 => 
            array (
                'id' => 85,
                'key' => 'add_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            80 => 
            array (
                'id' => 86,
                'key' => 'delete_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            81 => 
            array (
                'id' => 87,
                'key' => 'browse_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            82 => 
            array (
                'id' => 88,
                'key' => 'read_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            83 => 
            array (
                'id' => 89,
                'key' => 'edit_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            84 => 
            array (
                'id' => 90,
                'key' => 'add_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            85 => 
            array (
                'id' => 91,
                'key' => 'delete_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            86 => 
            array (
                'id' => 92,
                'key' => 'browse_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            87 => 
            array (
                'id' => 93,
                'key' => 'read_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            88 => 
            array (
                'id' => 94,
                'key' => 'edit_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            89 => 
            array (
                'id' => 95,
                'key' => 'add_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            90 => 
            array (
                'id' => 96,
                'key' => 'delete_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            91 => 
            array (
                'id' => 97,
                'key' => 'browse_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            92 => 
            array (
                'id' => 98,
                'key' => 'read_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            93 => 
            array (
                'id' => 99,
                'key' => 'edit_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            94 => 
            array (
                'id' => 100,
                'key' => 'add_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            95 => 
            array (
                'id' => 101,
                'key' => 'delete_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            96 => 
            array (
                'id' => 102,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            97 => 
            array (
                'id' => 103,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            98 => 
            array (
                'id' => 104,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            99 => 
            array (
                'id' => 105,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            100 => 
            array (
                'id' => 106,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            101 => 
            array (
                'id' => 107,
                'key' => 'browse_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            102 => 
            array (
                'id' => 108,
                'key' => 'read_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            103 => 
            array (
                'id' => 109,
                'key' => 'edit_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            104 => 
            array (
                'id' => 110,
                'key' => 'add_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            105 => 
            array (
                'id' => 111,
                'key' => 'delete_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            106 => 
            array (
                'id' => 112,
                'key' => 'browse_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            107 => 
            array (
                'id' => 113,
                'key' => 'read_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            108 => 
            array (
                'id' => 114,
                'key' => 'edit_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            109 => 
            array (
                'id' => 115,
                'key' => 'add_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            110 => 
            array (
                'id' => 116,
                'key' => 'delete_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            111 => 
            array (
                'id' => 117,
                'key' => 'browse_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            112 => 
            array (
                'id' => 118,
                'key' => 'read_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            113 => 
            array (
                'id' => 119,
                'key' => 'edit_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            114 => 
            array (
                'id' => 120,
                'key' => 'add_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            115 => 
            array (
                'id' => 121,
                'key' => 'delete_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            116 => 
            array (
                'id' => 122,
                'key' => 'browse_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            117 => 
            array (
                'id' => 123,
                'key' => 'read_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            118 => 
            array (
                'id' => 124,
                'key' => 'edit_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            119 => 
            array (
                'id' => 125,
                'key' => 'add_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            120 => 
            array (
                'id' => 126,
                'key' => 'delete_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            121 => 
            array (
                'id' => 127,
                'key' => 'browse_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            122 => 
            array (
                'id' => 128,
                'key' => 'read_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            123 => 
            array (
                'id' => 129,
                'key' => 'edit_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            124 => 
            array (
                'id' => 130,
                'key' => 'add_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            125 => 
            array (
                'id' => 131,
                'key' => 'delete_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            126 => 
            array (
                'id' => 132,
                'key' => 'browse_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            127 => 
            array (
                'id' => 133,
                'key' => 'read_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            128 => 
            array (
                'id' => 134,
                'key' => 'edit_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            129 => 
            array (
                'id' => 135,
                'key' => 'add_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            130 => 
            array (
                'id' => 136,
                'key' => 'delete_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            131 => 
            array (
                'id' => 137,
                'key' => 'browse_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            132 => 
            array (
                'id' => 138,
                'key' => 'read_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            133 => 
            array (
                'id' => 139,
                'key' => 'edit_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            134 => 
            array (
                'id' => 140,
                'key' => 'add_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            135 => 
            array (
                'id' => 141,
                'key' => 'delete_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
        ));
        
        
    }
}