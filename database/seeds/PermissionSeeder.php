<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 1,
                'name' => 'Danh mục sản phẩm',
                'display_name' => 'Danh mục sản phẩm',
                'parent_id' => 0,
                'key_code' => '',
            ],
            [
                'id' => 2,
                'name' => 'Danh sách danh mục',
                'display_name' => 'Danh sách danh mục',
                'parent_id' => 1,
                'key_code' => 'category_list'
            ],
            [
                'id' => 3,
                'name' => 'Thêm mới danh mục',
                'display_name' => 'Thêm mới danh mục',
                'parent_id' => 1,
                'key_code' => 'category_add'
            ],
            [
                'id' => 4,
                'name' => 'Sửa danh mục',
                'display_name' => 'Sửa danh mục',
                'parent_id' => 1,
                'key_code' => 'category_edit'
            ],
            [
                'id' => 5,
                'name' => 'Xoá danh mục',
                'display_name' => 'Xoá danh mục',
                'parent_id' => 1,
                'key_code' => 'category_delete'
            ],
            [
                'id' => 6,
                'name' => 'Menus',
                'display_name' => 'Menus',
                'parent_id' => 0,
                'key_code' => ''
            ],
            [
                'id' => 7,
                'name' => 'Danh sách menu',
                'display_name' => 'Danh sách menu',
                'parent_id' => 6,
                'key_code' => 'menu_list'
            ],
            [
                'id' => 8,
                'name' => 'Thêm mới menu',
                'display_name' => 'Thêm mới menu',
                'parent_id' => 6,
                'key_code' => 'menu_add'
            ],
            [
                'id' => 9,
                'name' => 'Sửa menu',
                'display_name' => 'Sửa menu',
                'parent_id' => 6,
                'key_code' => 'menu_edit'
            ],
            [
                'id' => 10,
                'name' => 'Xoá menu',
                'display_name' => 'Xoá menu',
                'parent_id' => 6,
                'key_code' => 'menu_delete'
            ],
            [
                'id' => 11,
                'name' => 'Sản phẩm',
                'display_name' => 'Menus',
                'parent_id' => 0,
                'key_code' => ''
            ],
            [
                'id' => 12,
                'name' => 'Danh sách sản phẩm',
                'display_name' => 'Danh sách sản phẩm',
                'parent_id' => 11,
                'key_code' => 'product_list'
            ],
            [
                'id' => 13,
                'name' => 'Thêm mới sản phẩm',
                'display_name' => 'Thêm mới sản phẩm',
                'parent_id' => 11,
                'key_code' => 'prodcut_add'
            ],
            [
                'id' => 14,
                'name' => 'Sửa sản phẩm',
                'display_name' => 'Sửa sản phẩm',
                'parent_id' => 11,
                'key_code' => 'product_edit'
            ],
            [
                'id' => 15,
                'name' => 'Xoá sản phẩm',
                'display_name' => 'Xoá sản phẩm',
                'parent_id' => 11,
                'key_code' => 'product_delete'
            ],
            [
                'id' => 16,
                'name' => 'Sliders',
                'display_name' => 'Sliders',
                'parent_id' => 0,
                'key_code' => ''
            ],
            [
                'id' => 17,
                'name' => 'Danh sách slider',
                'display_name' => 'Sliders',
                'parent_id' => 16,
                'key_code' => 'slider_list'
            ],
            [
                'id' => 18,
                'name' => 'Thêm mới slider',
                'display_name' => 'Thêm mới slider',
                'parent_id' => 16,
                'key_code' => 'slider_add'
            ],
            [
                'id' => 19,
                'name' => 'Sửa slider',
                'display_name' => 'Thêm mới slider',
                'parent_id' => 16,
                'key_code' => 'slider_edit'
            ],
            [
                'id' => 20,
                'name' => 'Xoá slider',
                'display_name' => 'Xoá slider',
                'parent_id' => 16,
                'key_code' => 'slider_delete'
            ],

            [
                'id' => 21,
                'name' => 'Settings',
                'display_name' => 'Settings',
                'parent_id' => 0,
                'key_code' => ''
            ],
            [
                'id' => 22,
                'name' => 'Danh settings',
                'display_name' => 'Danh settings',
                'parent_id' => 21,
                'key_code' => 'setting_list'
            ],
            [
                'id' => 23,
                'name' => 'Thêm mới setting',
                'display_name' => 'Thêm mới setting',
                'parent_id' => 21,
                'key_code' => 'setting_add'
            ],
            [
                'id' => 24,
                'name' => 'Sửa setting',
                'display_name' => 'Sửa setting',
                'parent_id' => 21,
                'key_code' => 'setting_edit'
            ],
            [
                'id' => 25,
                'name' => 'Xoá setting',
                'display_name' => 'Xoá setting',
                'parent_id' => 21,
                'key_code' => 'setting_delete'
            ],

            [
                'id' => 26,
                'name' => 'Users',
                'display_name' => 'Users',
                'parent_id' => 0,
                'key_code' => ''
            ],
            [
                'id' => 27,
                'name' => 'Danh sách users',
                'display_name' => 'Danh sách users',
                'parent_id' => 26,
                'key_code' => 'user_list'
            ],
            [
                'id' => 28,
                'name' => 'Thêm mới user',
                'display_name' => 'Thêm mới user',
                'parent_id' => 26,
                'key_code' => 'user_add'
            ],
            [
                'id' => 29,
                'name' => 'Sửa user',
                'display_name' => 'Sửa user',
                'parent_id' => 26,
                'key_code' => 'user_edit'
            ],
            [
                'id' => 30,
                'name' => 'Xoá user',
                'display_name' => 'Xoá user',
                'parent_id' => 26,
                'key_code' => 'user_delete'
            ],

             [
                'id' => 31,
                'name' => 'Roles',
                'display_name' => 'Roles',
                'parent_id' => 0,
                 'key_code' => ''
            ],
            [
                'id' => 32,
                'name' => 'Danh sách vai trò',
                'display_name' => 'Danh sách vai trò',
                'parent_id' => 31,
                'key_code' => 'role_list'
            ],
            [
                'id' => 33,
                'name' => 'Thêm mới vai trò',
                'display_name' => 'Thêm mới vai trò',
                'parent_id' => 31,
                'key_code' => 'role_add'
            ],
            [
                'id' => 34,
                'name' => 'Sửa vai trò',
                'display_name' => 'Sửa vai trò',
                'parent_id' => 31,
                'key_code' => 'role_edit'
            ],
            [
                'id' => 35,
                'name' => 'Xoá vai trò',
                'display_name' => 'Xoá vai trò',
                'parent_id' => 31,
                'key_code' => 'role_delete'
            ],

        ]);
    }
}
