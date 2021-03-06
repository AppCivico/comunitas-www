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
                'id' => 47,
                'key' => 'browse_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            37 => 
            array (
                'id' => 48,
                'key' => 'read_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            38 => 
            array (
                'id' => 49,
                'key' => 'edit_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            39 => 
            array (
                'id' => 50,
                'key' => 'add_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            40 => 
            array (
                'id' => 51,
                'key' => 'delete_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            41 => 
            array (
                'id' => 52,
                'key' => 'browse_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            42 => 
            array (
                'id' => 53,
                'key' => 'read_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            43 => 
            array (
                'id' => 54,
                'key' => 'edit_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            44 => 
            array (
                'id' => 55,
                'key' => 'add_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            45 => 
            array (
                'id' => 56,
                'key' => 'delete_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            46 => 
            array (
                'id' => 57,
                'key' => 'browse_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            47 => 
            array (
                'id' => 58,
                'key' => 'read_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            48 => 
            array (
                'id' => 59,
                'key' => 'edit_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            49 => 
            array (
                'id' => 60,
                'key' => 'add_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            50 => 
            array (
                'id' => 61,
                'key' => 'delete_podcasts',
                'table_name' => 'podcasts',
                'created_at' => '2020-06-19 21:06:07',
                'updated_at' => '2020-06-19 21:06:07',
            ),
            51 => 
            array (
                'id' => 62,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            52 => 
            array (
                'id' => 63,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            53 => 
            array (
                'id' => 64,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            54 => 
            array (
                'id' => 65,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            55 => 
            array (
                'id' => 66,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-06-19 21:14:17',
                'updated_at' => '2020-06-19 21:14:17',
            ),
            56 => 
            array (
                'id' => 67,
                'key' => 'browse_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            57 => 
            array (
                'id' => 68,
                'key' => 'read_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            58 => 
            array (
                'id' => 69,
                'key' => 'edit_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            59 => 
            array (
                'id' => 70,
                'key' => 'add_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            60 => 
            array (
                'id' => 71,
                'key' => 'delete_podcast_contents',
                'table_name' => 'podcast_contents',
                'created_at' => '2020-06-19 21:20:12',
                'updated_at' => '2020-06-19 21:20:12',
            ),
            61 => 
            array (
                'id' => 72,
                'key' => 'browse_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            62 => 
            array (
                'id' => 73,
                'key' => 'read_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            63 => 
            array (
                'id' => 74,
                'key' => 'edit_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            64 => 
            array (
                'id' => 75,
                'key' => 'add_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            65 => 
            array (
                'id' => 76,
                'key' => 'delete_webinar_contents',
                'table_name' => 'webinar_contents',
                'created_at' => '2020-06-19 21:53:59',
                'updated_at' => '2020-06-19 21:53:59',
            ),
            66 => 
            array (
                'id' => 77,
                'key' => 'browse_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            67 => 
            array (
                'id' => 78,
                'key' => 'read_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            68 => 
            array (
                'id' => 79,
                'key' => 'edit_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            69 => 
            array (
                'id' => 80,
                'key' => 'add_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            70 => 
            array (
                'id' => 81,
                'key' => 'delete_guidelines',
                'table_name' => 'guidelines',
                'created_at' => '2020-06-22 18:05:28',
                'updated_at' => '2020-06-22 18:05:28',
            ),
            71 => 
            array (
                'id' => 82,
                'key' => 'browse_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            72 => 
            array (
                'id' => 83,
                'key' => 'read_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            73 => 
            array (
                'id' => 84,
                'key' => 'edit_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            74 => 
            array (
                'id' => 85,
                'key' => 'add_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            75 => 
            array (
                'id' => 86,
                'key' => 'delete_guideline_contents',
                'table_name' => 'guideline_contents',
                'created_at' => '2020-06-22 18:27:47',
                'updated_at' => '2020-06-22 18:27:47',
            ),
            76 => 
            array (
                'id' => 87,
                'key' => 'browse_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            77 => 
            array (
                'id' => 88,
                'key' => 'read_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            78 => 
            array (
                'id' => 89,
                'key' => 'edit_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            79 => 
            array (
                'id' => 90,
                'key' => 'add_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            80 => 
            array (
                'id' => 91,
                'key' => 'delete_authors',
                'table_name' => 'authors',
                'created_at' => '2020-06-22 18:52:02',
                'updated_at' => '2020-06-22 18:52:02',
            ),
            81 => 
            array (
                'id' => 92,
                'key' => 'browse_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            82 => 
            array (
                'id' => 93,
                'key' => 'read_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            83 => 
            array (
                'id' => 94,
                'key' => 'edit_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            84 => 
            array (
                'id' => 95,
                'key' => 'add_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            85 => 
            array (
                'id' => 96,
                'key' => 'delete_interviews',
                'table_name' => 'interviews',
                'created_at' => '2020-06-22 20:03:09',
                'updated_at' => '2020-06-22 20:03:09',
            ),
            86 => 
            array (
                'id' => 97,
                'key' => 'browse_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            87 => 
            array (
                'id' => 98,
                'key' => 'read_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            88 => 
            array (
                'id' => 99,
                'key' => 'edit_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            89 => 
            array (
                'id' => 100,
                'key' => 'add_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            90 => 
            array (
                'id' => 101,
                'key' => 'delete_interview_contents',
                'table_name' => 'interview_contents',
                'created_at' => '2020-06-22 20:58:34',
                'updated_at' => '2020-06-22 20:58:34',
            ),
            91 => 
            array (
                'id' => 102,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            92 => 
            array (
                'id' => 103,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            93 => 
            array (
                'id' => 104,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            94 => 
            array (
                'id' => 105,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            95 => 
            array (
                'id' => 106,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2020-06-22 21:57:09',
                'updated_at' => '2020-06-22 21:57:09',
            ),
            96 => 
            array (
                'id' => 107,
                'key' => 'browse_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            97 => 
            array (
                'id' => 108,
                'key' => 'read_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            98 => 
            array (
                'id' => 109,
                'key' => 'edit_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            99 => 
            array (
                'id' => 110,
                'key' => 'add_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            100 => 
            array (
                'id' => 111,
                'key' => 'delete_article_contents',
                'table_name' => 'article_contents',
                'created_at' => '2020-06-22 22:12:59',
                'updated_at' => '2020-06-22 22:12:59',
            ),
            101 => 
            array (
                'id' => 112,
                'key' => 'browse_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            102 => 
            array (
                'id' => 113,
                'key' => 'read_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            103 => 
            array (
                'id' => 114,
                'key' => 'edit_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            104 => 
            array (
                'id' => 115,
                'key' => 'add_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            105 => 
            array (
                'id' => 116,
                'key' => 'delete_news',
                'table_name' => 'news',
                'created_at' => '2020-06-22 22:51:11',
                'updated_at' => '2020-06-22 22:51:11',
            ),
            106 => 
            array (
                'id' => 117,
                'key' => 'browse_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            107 => 
            array (
                'id' => 118,
                'key' => 'read_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            108 => 
            array (
                'id' => 119,
                'key' => 'edit_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            109 => 
            array (
                'id' => 120,
                'key' => 'add_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            110 => 
            array (
                'id' => 121,
                'key' => 'delete_new_contents',
                'table_name' => 'new_contents',
                'created_at' => '2020-06-22 23:01:27',
                'updated_at' => '2020-06-22 23:01:27',
            ),
            111 => 
            array (
                'id' => 122,
                'key' => 'browse_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            112 => 
            array (
                'id' => 123,
                'key' => 'read_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            113 => 
            array (
                'id' => 124,
                'key' => 'edit_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            114 => 
            array (
                'id' => 125,
                'key' => 'add_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            115 => 
            array (
                'id' => 126,
                'key' => 'delete_trail_contents',
                'table_name' => 'trail_contents',
                'created_at' => '2020-07-08 23:29:57',
                'updated_at' => '2020-07-08 23:29:57',
            ),
            116 => 
            array (
                'id' => 127,
                'key' => 'browse_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            117 => 
            array (
                'id' => 128,
                'key' => 'read_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            118 => 
            array (
                'id' => 129,
                'key' => 'edit_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            119 => 
            array (
                'id' => 130,
                'key' => 'add_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            120 => 
            array (
                'id' => 131,
                'key' => 'delete_trails',
                'table_name' => 'trails',
                'created_at' => '2020-07-08 23:31:26',
                'updated_at' => '2020-07-08 23:31:26',
            ),
            121 => 
            array (
                'id' => 132,
                'key' => 'browse_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            122 => 
            array (
                'id' => 133,
                'key' => 'read_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            123 => 
            array (
                'id' => 134,
                'key' => 'edit_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            124 => 
            array (
                'id' => 135,
                'key' => 'add_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            125 => 
            array (
                'id' => 136,
                'key' => 'delete_banners',
                'table_name' => 'banners',
                'created_at' => '2020-07-17 19:31:21',
                'updated_at' => '2020-07-17 19:31:21',
            ),
            126 => 
            array (
                'id' => 137,
                'key' => 'browse_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            127 => 
            array (
                'id' => 138,
                'key' => 'read_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            128 => 
            array (
                'id' => 139,
                'key' => 'edit_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            129 => 
            array (
                'id' => 140,
                'key' => 'add_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            130 => 
            array (
                'id' => 141,
                'key' => 'delete_testimonials',
                'table_name' => 'testimonials',
                'created_at' => '2020-07-17 19:44:36',
                'updated_at' => '2020-07-17 19:44:36',
            ),
            131 => 
            array (
                'id' => 142,
                'key' => 'browse_about',
                'table_name' => 'about',
                'created_at' => '2020-08-07 22:29:41',
                'updated_at' => '2020-08-07 22:29:41',
            ),
            132 => 
            array (
                'id' => 143,
                'key' => 'read_about',
                'table_name' => 'about',
                'created_at' => '2020-08-07 22:29:41',
                'updated_at' => '2020-08-07 22:29:41',
            ),
            133 => 
            array (
                'id' => 144,
                'key' => 'edit_about',
                'table_name' => 'about',
                'created_at' => '2020-08-07 22:29:41',
                'updated_at' => '2020-08-07 22:29:41',
            ),
            134 => 
            array (
                'id' => 145,
                'key' => 'add_about',
                'table_name' => 'about',
                'created_at' => '2020-08-07 22:29:41',
                'updated_at' => '2020-08-07 22:29:41',
            ),
            135 => 
            array (
                'id' => 146,
                'key' => 'delete_about',
                'table_name' => 'about',
                'created_at' => '2020-08-07 22:29:41',
                'updated_at' => '2020-08-07 22:29:41',
            ),
            136 => 
            array (
                'id' => 147,
                'key' => 'browse_initiative',
                'table_name' => 'initiative',
                'created_at' => '2020-08-07 22:34:17',
                'updated_at' => '2020-08-07 22:34:17',
            ),
            137 => 
            array (
                'id' => 148,
                'key' => 'read_initiative',
                'table_name' => 'initiative',
                'created_at' => '2020-08-07 22:34:17',
                'updated_at' => '2020-08-07 22:34:17',
            ),
            138 => 
            array (
                'id' => 149,
                'key' => 'edit_initiative',
                'table_name' => 'initiative',
                'created_at' => '2020-08-07 22:34:17',
                'updated_at' => '2020-08-07 22:34:17',
            ),
            139 => 
            array (
                'id' => 150,
                'key' => 'add_initiative',
                'table_name' => 'initiative',
                'created_at' => '2020-08-07 22:34:17',
                'updated_at' => '2020-08-07 22:34:17',
            ),
            140 => 
            array (
                'id' => 151,
                'key' => 'delete_initiative',
                'table_name' => 'initiative',
                'created_at' => '2020-08-07 22:34:17',
                'updated_at' => '2020-08-07 22:34:17',
            ),
            141 => 
            array (
                'id' => 152,
                'key' => 'browse_collaborators',
                'table_name' => 'collaborators',
                'created_at' => '2020-08-07 22:37:11',
                'updated_at' => '2020-08-07 22:37:11',
            ),
            142 => 
            array (
                'id' => 153,
                'key' => 'read_collaborators',
                'table_name' => 'collaborators',
                'created_at' => '2020-08-07 22:37:11',
                'updated_at' => '2020-08-07 22:37:11',
            ),
            143 => 
            array (
                'id' => 154,
                'key' => 'edit_collaborators',
                'table_name' => 'collaborators',
                'created_at' => '2020-08-07 22:37:11',
                'updated_at' => '2020-08-07 22:37:11',
            ),
            144 => 
            array (
                'id' => 155,
                'key' => 'add_collaborators',
                'table_name' => 'collaborators',
                'created_at' => '2020-08-07 22:37:11',
                'updated_at' => '2020-08-07 22:37:11',
            ),
            145 => 
            array (
                'id' => 156,
                'key' => 'delete_collaborators',
                'table_name' => 'collaborators',
                'created_at' => '2020-08-07 22:37:11',
                'updated_at' => '2020-08-07 22:37:11',
            ),
            146 => 
            array (
                'id' => 157,
                'key' => 'browse_support',
                'table_name' => 'support',
                'created_at' => '2020-08-07 22:39:50',
                'updated_at' => '2020-08-07 22:39:50',
            ),
            147 => 
            array (
                'id' => 158,
                'key' => 'read_support',
                'table_name' => 'support',
                'created_at' => '2020-08-07 22:39:50',
                'updated_at' => '2020-08-07 22:39:50',
            ),
            148 => 
            array (
                'id' => 159,
                'key' => 'edit_support',
                'table_name' => 'support',
                'created_at' => '2020-08-07 22:39:50',
                'updated_at' => '2020-08-07 22:39:50',
            ),
            149 => 
            array (
                'id' => 160,
                'key' => 'add_support',
                'table_name' => 'support',
                'created_at' => '2020-08-07 22:39:50',
                'updated_at' => '2020-08-07 22:39:50',
            ),
            150 => 
            array (
                'id' => 161,
                'key' => 'delete_support',
                'table_name' => 'support',
                'created_at' => '2020-08-07 22:39:50',
                'updated_at' => '2020-08-07 22:39:50',
            ),
            151 => 
            array (
                'id' => 162,
                'key' => 'browse_abouts',
                'table_name' => 'abouts',
                'created_at' => '2020-08-07 22:48:23',
                'updated_at' => '2020-08-07 22:48:23',
            ),
            152 => 
            array (
                'id' => 163,
                'key' => 'read_abouts',
                'table_name' => 'abouts',
                'created_at' => '2020-08-07 22:48:23',
                'updated_at' => '2020-08-07 22:48:23',
            ),
            153 => 
            array (
                'id' => 164,
                'key' => 'edit_abouts',
                'table_name' => 'abouts',
                'created_at' => '2020-08-07 22:48:23',
                'updated_at' => '2020-08-07 22:48:23',
            ),
            154 => 
            array (
                'id' => 165,
                'key' => 'add_abouts',
                'table_name' => 'abouts',
                'created_at' => '2020-08-07 22:48:23',
                'updated_at' => '2020-08-07 22:48:23',
            ),
            155 => 
            array (
                'id' => 166,
                'key' => 'delete_abouts',
                'table_name' => 'abouts',
                'created_at' => '2020-08-07 22:48:23',
                'updated_at' => '2020-08-07 22:48:23',
            ),
            156 => 
            array (
                'id' => 167,
                'key' => 'browse_initiatives',
                'table_name' => 'initiatives',
                'created_at' => '2020-08-07 23:02:32',
                'updated_at' => '2020-08-07 23:02:32',
            ),
            157 => 
            array (
                'id' => 168,
                'key' => 'read_initiatives',
                'table_name' => 'initiatives',
                'created_at' => '2020-08-07 23:02:32',
                'updated_at' => '2020-08-07 23:02:32',
            ),
            158 => 
            array (
                'id' => 169,
                'key' => 'edit_initiatives',
                'table_name' => 'initiatives',
                'created_at' => '2020-08-07 23:02:32',
                'updated_at' => '2020-08-07 23:02:32',
            ),
            159 => 
            array (
                'id' => 170,
                'key' => 'add_initiatives',
                'table_name' => 'initiatives',
                'created_at' => '2020-08-07 23:02:32',
                'updated_at' => '2020-08-07 23:02:32',
            ),
            160 => 
            array (
                'id' => 171,
                'key' => 'delete_initiatives',
                'table_name' => 'initiatives',
                'created_at' => '2020-08-07 23:02:32',
                'updated_at' => '2020-08-07 23:02:32',
            ),
            161 => 
            array (
                'id' => 172,
                'key' => 'browse_supports',
                'table_name' => 'supports',
                'created_at' => '2020-08-07 23:12:40',
                'updated_at' => '2020-08-07 23:12:40',
            ),
            162 => 
            array (
                'id' => 173,
                'key' => 'read_supports',
                'table_name' => 'supports',
                'created_at' => '2020-08-07 23:12:40',
                'updated_at' => '2020-08-07 23:12:40',
            ),
            163 => 
            array (
                'id' => 174,
                'key' => 'edit_supports',
                'table_name' => 'supports',
                'created_at' => '2020-08-07 23:12:40',
                'updated_at' => '2020-08-07 23:12:40',
            ),
            164 => 
            array (
                'id' => 175,
                'key' => 'add_supports',
                'table_name' => 'supports',
                'created_at' => '2020-08-07 23:12:40',
                'updated_at' => '2020-08-07 23:12:40',
            ),
            165 => 
            array (
                'id' => 176,
                'key' => 'delete_supports',
                'table_name' => 'supports',
                'created_at' => '2020-08-07 23:12:40',
                'updated_at' => '2020-08-07 23:12:40',
            ),
            166 => 
            array (
                'id' => 177,
                'key' => 'browse_home',
                'table_name' => 'home',
                'created_at' => '2020-08-12 22:25:54',
                'updated_at' => '2020-08-12 22:25:54',
            ),
            167 => 
            array (
                'id' => 178,
                'key' => 'read_home',
                'table_name' => 'home',
                'created_at' => '2020-08-12 22:25:54',
                'updated_at' => '2020-08-12 22:25:54',
            ),
            168 => 
            array (
                'id' => 179,
                'key' => 'edit_home',
                'table_name' => 'home',
                'created_at' => '2020-08-12 22:25:54',
                'updated_at' => '2020-08-12 22:25:54',
            ),
            169 => 
            array (
                'id' => 180,
                'key' => 'add_home',
                'table_name' => 'home',
                'created_at' => '2020-08-12 22:25:54',
                'updated_at' => '2020-08-12 22:25:54',
            ),
            170 => 
            array (
                'id' => 181,
                'key' => 'delete_home',
                'table_name' => 'home',
                'created_at' => '2020-08-12 22:25:54',
                'updated_at' => '2020-08-12 22:25:54',
            ),
        ));
        
        
    }
}