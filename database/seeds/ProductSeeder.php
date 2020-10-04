<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone XS',
                'price' => '25990000',
                'category_id' => 1,
                'feature_image_name' => 'iphone-7-plus.jpg',
                'feature_image_path' => 'Eshopper/images/home/iphone-7-plus.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Iphone 12',
                'price' => '21750000',
                'category_id' => 1,
                'feature_image_name' => 'iphone-11-pro-max-green.jpg',
                'feature_image_path' => 'Eshopper/images/home/iphone-11-pro-max-green.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Iphone 7',
                'price' => '15430000',
                'category_id' => 10,
                'feature_image_name' => 'iphone-xs-gold.jpg',
                'feature_image_path' => 'Eshopper/images/home/iphone-xs-gold.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Iphone 6',
                'price' => '6910000',
                'category_id' => 11,
                'feature_image_name' => 'oppo-a52-black.jpg',
                'feature_image_path' => 'Eshopper/images/home/oppo-a52-black.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'SamSung Note 2',
                'price' => '13200000',
                'category_id' => 12,
                'feature_image_name' => 'realme-6-8gb.jpg',
                'feature_image_path' => 'Eshopper/images/home/realme-6-8gb.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Samsung galaxy 12',
                'price' => '25000000',
                'category_id' => 13,
                'feature_image_name' => 'samsung-galaxy-a7.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-a7.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Blackberry 1973',
                'price' => '2990000',
                'category_id' => 14,
                'feature_image_name' => 'samsung-galaxy-a51.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-a51.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Blackberry 1974',
                'price' => '25000000',
                'category_id' => 15,
                'feature_image_name' => 'samsung-galaxy-note-10-plus.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-note-10-plus.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Bphone 11',
                'price' => '25000000',
                'category_id' => 4,
                'feature_image_name' => 'samsung-galaxy-s20.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-s20.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0, 'user_id' => 1
            ],
            [
                'name' => 'Bphone 12',
                'price' => '9990000',
                'category_id' => 4,
                'feature_image_name' => 'samsung-galaxy-tab-a0.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-tab-a0.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Xiaomi 11',
                'price' => '25000000',
                'category_id' => 5,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => 'Eshopper/images/home/phone1.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Xiaomi 12',
                'price' => '28810000',
                'category_id' => 5,
                'feature_image_name' => 'xiaomi-redmi-note-9s-4gb.jpg',
                'feature_image_path' => 'Eshopper/images/home/xiaomi-redmi-note-9s-4gb.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Oppo 11',
                'price' => '25000000',
                'category_id' => 6,
                'feature_image_name' => 'oppo-a52-black.jpg',
                'feature_image_path' => 'Eshopper/images/home/oppo-a52-black.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Oppo 12',
                'price' => '1500000',
                'category_id' => 6,
                'feature_image_name' => 'realme-6-8gb.jpg',
                'feature_image_path' => 'Eshopper/images/home/realme-6-8gb.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Vsmart 11',
                'price' => '1200000',
                'category_id' => 7,
                'feature_image_name' => 'samsung-galaxy-a7.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-a7.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Vsmart 12',
                'price' => '2500000',
                'category_id' => 7,
                'feature_image_name' => 'samsung-galaxy-a51.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-a51.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Huawei 11',
                'price' => '14320000',
                'category_id' => 8,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => 'Eshopper/images/home/phone1.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0, 'user_id' => 1
            ],
            [
                'name' => 'Huawei 12',
                'price' => '2590000',
                'category_id' => 8,
                'feature_image_name' => 'samsung-galaxy-s20.jpg',
                'feature_image_path' => 'Eshopper/images/home/samsung-galaxy-s20.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0, 'user_id' => 1
            ],
            [
                'name' => 'OnePlus 11',
                'price' => '1100000',
                'category_id' => 9,
                'feature_image_name' => 'iphone-xs-gold.jpg',
                'feature_image_path' => 'Eshopper/images/home/iphone-xs-gold.jpg',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'OnePlus 12',
                'price' => '18180000',
                'category_id' => 9,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => 'Eshopper/images/home/phone1.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],

        ]);
    }
}
