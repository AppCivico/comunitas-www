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
                'id' => 3,
                'name' => 'Juntos',
                'email' => 'juntos@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ennwf2rvt69GLYlb83aRb.hxXPHs4buO2UfbOnAtO52GPc.0z052K',
                'remember_token' => NULL,
                'created_at' => '2020-06-26 21:34:06',
                'updated_at' => '2020-06-26 21:34:06',
                'avatar' => 'users/June2020/l7YysKTtqi2LTniwyAzd.jpg',
                'role_id' => 2,
                'settings' => '{"locale":"pt_br"}',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'edgard',
                'email' => 'edg@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hdvi/4pINtTk2b85pIsC6OWznVE/BQDXWHjTJX7sIojyDDAjjFUfK',
                'remember_token' => 'vNfEWIX1StP7H9hkqlMqmbM8utWokMcjYSJcOETgzei2RRIBwBo400d21hah',
                'created_at' => '2020-06-23 15:44:11',
                'updated_at' => '2020-06-23 15:45:35',
                'avatar' => 'users/default.png',
                'role_id' => 2,
                'settings' => '{"locale":"pt_br"}',
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YT7mr6RmSuNmZXr.JTDIU.iRSO1GJJm0QQdhyoWoqNEC7d9l5NIOC',
                'remember_token' => 'BV9JsoeBhXJGuFbDDNbxu6e5b9Vi67JHPa870I1LEMsqaNefKtU9bWLlJGyG',
                'created_at' => '2020-05-26 21:55:40',
                'updated_at' => '2020-07-02 22:33:49',
                'avatar' => 'users/default.png',
                'role_id' => 1,
                'settings' => '{"locale":"en"}',
            ),
        ));
        
        
    }
}