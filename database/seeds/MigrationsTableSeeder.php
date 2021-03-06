<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 73,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 74,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 75,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 76,
                'migration' => '2016_01_01_000000_create_pages_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 77,
                'migration' => '2016_01_01_000000_create_posts_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 78,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 79,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 80,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 81,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 82,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 83,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 84,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 85,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 86,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 87,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 88,
                'migration' => '2017_04_11_000000_alter_post_nullable_fields_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 89,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 90,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 91,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 92,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 93,
                'migration' => '2017_11_26_015000_create_user_roles_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 94,
                'migration' => '2018_03_11_000000_add_user_settings',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 95,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 96,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 97,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 98,
                'migration' => '2020_06_15_232301_create_categories_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 99,
                'migration' => '2020_06_15_232301_create_webinar_contents_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 100,
                'migration' => '2020_06_15_232301_create_webinars_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 101,
                'migration' => '2020_06_16_000629_create_category_webinar_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 102,
                'migration' => '2020_06_17_235341_create_authors_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 103,
                'migration' => '2020_06_19_170133_create_podcasts_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 104,
                'migration' => '2020_06_19_170539_create_category_podcast_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 105,
                'migration' => '2020_06_19_171321_create_podcast_contents_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 109,
                'migration' => '2020_06_22_161739_create_guidelines_table',
                'batch' => 2,
            ),
            34 => 
            array (
                'id' => 110,
                'migration' => '2020_06_22_180737_create_category_guideline_table',
                'batch' => 2,
            ),
            35 => 
            array (
                'id' => 111,
                'migration' => '2020_06_22_182058_create_guideline_contents_table',
                'batch' => 3,
            ),
            36 => 
            array (
                'id' => 148,
                'migration' => '2020_06_22_194417_create_interviews_table',
                'batch' => 4,
            ),
            37 => 
            array (
                'id' => 149,
                'migration' => '2020_06_22_204301_create_category_interview_table',
                'batch' => 5,
            ),
            38 => 
            array (
                'id' => 150,
                'migration' => '2020_06_22_205154_create_interview_contents_table',
                'batch' => 6,
            ),
            39 => 
            array (
                'id' => 154,
                'migration' => '2020_06_22_213533_create_articles_table',
                'batch' => 7,
            ),
            40 => 
            array (
                'id' => 155,
                'migration' => '2020_06_22_215816_create_article_category_table',
                'batch' => 7,
            ),
            41 => 
            array (
                'id' => 157,
                'migration' => '2020_06_22_220743_create_article_contents_table',
                'batch' => 8,
            ),
            42 => 
            array (
                'id' => 161,
                'migration' => '2020_06_22_223755_create_news_table',
                'batch' => 9,
            ),
            43 => 
            array (
                'id' => 164,
                'migration' => '2020_06_22_224120_create_category_news_table',
                'batch' => 10,
            ),
            44 => 
            array (
                'id' => 165,
                'migration' => '2020_06_22_225146_create_new_contents_table',
                'batch' => 10,
            ),
        ));
        
        
    }
}