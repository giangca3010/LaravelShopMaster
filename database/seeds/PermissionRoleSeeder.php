<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            [
                'role_id' => 1,
                'permission_id' => 2
            ],
            [
                'role_id' => 1,
                'permission_id' => 3
            ],
            [
                'role_id' => 1,
                'permission_id' => 4
            ],
            [
                'role_id' => 1,
                'permission_id' => 5
            ],
            [
                'role_id' => 1,
                'permission_id' => 7
            ],
            [
                'role_id' => 1,
                'permission_id' => 8
            ],
            [
                'role_id' => 1,
                'permission_id' => 9
            ],
            [
                'role_id' => 1,
                'permission_id' => 10
            ],
            [
                'role_id' => 1,
                'permission_id' => 12
            ],
            [
                'role_id' => 1,
                'permission_id' => 13
            ],
            [
                'role_id' => 1,
                'permission_id' => 14
            ],
            [
                'role_id' => 1,
                'permission_id' => 15
            ],
            [
                'role_id' => 1,
                'permission_id' => 17
            ],
            [
                'role_id' => 1,
                'permission_id' => 18
            ],
            [
                'role_id' => 1,
                'permission_id' => 19
            ],
            [
                'role_id' => 1,
                'permission_id' => 20
            ],
            [
                'role_id' => 1,
                'permission_id' => 22
            ],
            [
                'role_id' => 1,
                'permission_id' => 23
            ],
            [
                'role_id' => 1,
                'permission_id' => 24
            ],
            [
                'role_id' => 1,
                'permission_id' => 25
            ],
            [
                'role_id' => 1,
                'permission_id' => 27
            ],
            [
                'role_id' => 1,
                'permission_id' => 28
            ],
            [
                'role_id' => 1,
                'permission_id' => 29
            ],
            [
                'role_id' => 1,
                'permission_id' => 30
            ],
            [
                'role_id' => 1,
                'permission_id' => 32
            ],
            [
                'role_id' => 1,
                'permission_id' => 33
            ],
            [
                'role_id' => 1,
                'permission_id' => 34
            ],
            [
                'role_id' => 1,
                'permission_id' => 35
            ],

        ]);
    }
}
