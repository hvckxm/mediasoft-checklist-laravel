<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 3,
            ),
            4 => 
            array (
                'permission_id' => 4,
                'role_id' => 3,
            ),
            5 => 
            array (
                'permission_id' => 5,
                'role_id' => 3,
            ),
            6 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            7 => 
            array (
                'permission_id' => 7,
                'role_id' => 3,
            ),
            8 => 
            array (
                'permission_id' => 8,
                'role_id' => 3,
            ),
            9 => 
            array (
                'permission_id' => 9,
                'role_id' => 3,
            ),
            10 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            11 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 11,
                'role_id' => 3,
            ),
            13 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 12,
                'role_id' => 3,
            ),
            15 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 13,
                'role_id' => 3,
            ),
            17 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 14,
                'role_id' => 3,
            ),
            19 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 15,
                'role_id' => 3,
            ),
            21 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            23 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            24 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            26 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            27 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 18,
                'role_id' => 3,
            ),
            29 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            30 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 19,
                'role_id' => 3,
            ),
            32 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 21,
                'role_id' => 3,
            ),
            37 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 22,
                'role_id' => 3,
            ),
            39 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 23,
                'role_id' => 3,
            ),
            41 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 24,
                'role_id' => 3,
            ),
            43 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 25,
                'role_id' => 3,
            ),
            45 => 
            array (
                'permission_id' => 26,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 32,
                'role_id' => 3,
            ),
            48 => 
            array (
                'permission_id' => 32,
                'role_id' => 4,
            ),
            49 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 33,
                'role_id' => 3,
            ),
            51 => 
            array (
                'permission_id' => 33,
                'role_id' => 4,
            ),
            52 => 
            array (
                'permission_id' => 34,
                'role_id' => 3,
            ),
            53 => 
            array (
                'permission_id' => 35,
                'role_id' => 3,
            ),
            54 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            55 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            57 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            59 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            61 => 
            array (
                'permission_id' => 40,
                'role_id' => 3,
            ),
            62 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
        ));
        
        
    }
}