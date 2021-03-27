<?php

namespace Database\Seeders;

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
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'browse_check_lists',
                'table_name' => 'check_lists',
                'created_at' => '2021-03-25 11:52:49',
                'updated_at' => '2021-03-25 11:52:49',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'read_check_lists',
                'table_name' => 'check_lists',
                'created_at' => '2021-03-25 11:52:49',
                'updated_at' => '2021-03-25 11:52:49',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'edit_check_lists',
                'table_name' => 'check_lists',
                'created_at' => '2021-03-25 11:52:49',
                'updated_at' => '2021-03-25 11:52:49',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'add_check_lists',
                'table_name' => 'check_lists',
                'created_at' => '2021-03-25 11:52:49',
                'updated_at' => '2021-03-25 11:52:49',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'delete_check_lists',
                'table_name' => 'check_lists',
                'created_at' => '2021-03-25 11:52:49',
                'updated_at' => '2021-03-25 11:52:49',
            ),
            31 => 
            array (
                'id' => 37,
                'key' => 'browse_accesses',
                'table_name' => 'accesses',
                'created_at' => '2021-03-26 05:20:10',
                'updated_at' => '2021-03-26 05:20:10',
            ),
            32 => 
            array (
                'id' => 38,
                'key' => 'read_accesses',
                'table_name' => 'accesses',
                'created_at' => '2021-03-26 05:20:10',
                'updated_at' => '2021-03-26 05:20:10',
            ),
            33 => 
            array (
                'id' => 39,
                'key' => 'edit_accesses',
                'table_name' => 'accesses',
                'created_at' => '2021-03-26 05:20:10',
                'updated_at' => '2021-03-26 05:20:10',
            ),
            34 => 
            array (
                'id' => 40,
                'key' => 'add_accesses',
                'table_name' => 'accesses',
                'created_at' => '2021-03-26 05:20:10',
                'updated_at' => '2021-03-26 05:20:10',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'delete_accesses',
                'table_name' => 'accesses',
                'created_at' => '2021-03-26 05:20:10',
                'updated_at' => '2021-03-26 05:20:10',
            ),
        ));
        
        
    }
}