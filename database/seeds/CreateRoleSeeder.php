<?php

use Illuminate\Database\Seeder;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'display_name' => 'Quản trị viên'
            ],
            [
                'name' => 'Guest',
                'display_name' => 'Khách hàng'
            ],
            [
                'name' => 'Developer',
                'display_name' => 'Nhà phát triển'
            ],
            [
                'name' => 'Content',
                'display_name' => 'Chỉnh sửa nội dung'
            ],
        ]);
    }
}
