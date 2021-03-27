<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'junior_admin',
                'display_name' => 'Младший администратор',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-26 07:23:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Обычный Пользователь',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'admin',
                'display_name' => 'Главный Администратор',
                'created_at' => '2021-03-26 05:38:47',
                'updated_at' => '2021-03-26 07:23:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'moderator',
                'display_name' => 'Модератор',
                'created_at' => '2021-03-26 05:41:25',
                'updated_at' => '2021-03-26 05:41:25',
            ),
        ));
        
        
    }
}