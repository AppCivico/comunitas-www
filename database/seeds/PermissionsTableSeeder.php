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
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-05-26 21:55:40',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-05-26 21:55:41',
                'updated_at' => '2020-05-26 21:55:41',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_contents',
                'table_name' => 'contents',
                'created_at' => '2020-06-11 17:58:24',
                'updated_at' => '2020-06-11 17:58:24',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_types',
                'table_name' => 'types',
                'created_at' => '2020-06-11 18:33:23',
                'updated_at' => '2020-06-11 18:33:23',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_webinars',
                'table_name' => 'webinars',
                'created_at' => '2020-06-12 22:34:35',
                'updated_at' => '2020-06-12 22:34:35',
            ),
        ));
        
        
    }
}