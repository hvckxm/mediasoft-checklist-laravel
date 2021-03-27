<?php

namespace Database\Seeders;

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
                'display_name_singular' => 'Пользователь',
                'display_name_plural' => 'Пользователи',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-26 12:59:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Меню',
                'display_name_plural' => 'Меню',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Роль',
                'display_name_plural' => 'Роли',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-03-25 11:49:59',
                'updated_at' => '2021-03-25 11:49:59',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'check_lists',
                'slug' => 'check-lists',
                'display_name_singular' => 'Чек лист',
                'display_name_plural' => 'Чек листы',
                'icon' => 'voyager-data',
                'model_name' => 'App\\Models\\CheckList',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-03-25 11:52:49',
                'updated_at' => '2021-03-26 13:26:16',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'accesses',
                'slug' => 'accesses',
                'display_name_singular' => 'Управление доступом пользователей',
                'display_name_plural' => 'Управление доступом пользователей',
                'icon' => 'voyager-params',
                'model_name' => 'App\\Models\\Access',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-03-26 05:20:10',
                'updated_at' => '2021-03-26 05:26:59',
            ),
        ));
        
        
    }
}