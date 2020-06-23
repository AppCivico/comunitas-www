<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K3NgJu5y2EYMtrpKGEDso.f91T8C1sTDaDxbPYNMi54c2h6440z0q',
                'remember_token' => '67wY7g3WQ8Wdbo63RTJDdqH89McC9MtXa7qB2Mr4YM4DjfmPHwET7KhmxcPR',
                'settings' => NULL,
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-06-11 16:08:51',
            ),
        ));
        
        
    }
}