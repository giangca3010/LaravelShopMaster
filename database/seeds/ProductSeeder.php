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
                'price' => '25000000',
                'category_id' => 1,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Iphone 12',
                'price' => '25000000',
                'category_id' => 1,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Iphone 7',
                'price' => '15000000',
                'category_id' => 10,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Iphone 6',
                'price' => '15000000',
                'category_id' => 11,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'SamSung Note 2',
                'price' => '25000000',
                'category_id' => 12,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Samsung galaxy 12',
                'price' => '25000000',
                'category_id' => 13,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Blackberry 1973',
                'price' => '25000000',
                'category_id' => 14,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Blackberry 1974',
                'price' => '25000000',
                'category_id' => 15,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Bphone 11',
                'price' => '25000000',
                'category_id' => 4,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0, 'user_id' => 1
            ],
            [
                'name' => 'Bphone 12',
                'price' => '25000000',
                'category_id' => 4,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Xiaomi 11',
                'price' => '25000000',
                'category_id' => 5,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Xiaomi 12',
                'price' => '25000000',
                'category_id' => 5,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Oppo 11',
                'price' => '25000000',
                'category_id' => 6,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Oppo 12',
                'price' => '25000000',
                'category_id' => 6,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Vsmart 11',
                'price' => '25000000',
                'category_id' => 7,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Vsmart 12',
                'price' => '25000000',
                'category_id' => 7,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'Huawei 11',
                'price' => '25000000',
                'category_id' => 8,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0, 'user_id' => 1
            ],
            [
                'name' => 'Huawei 12',
                'price' => '25000000',
                'category_id' => 8,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0, 'user_id' => 1
            ],
            [
                'name' => 'OnePlus 11',
                'price' => '25000000',
                'category_id' => 9,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],
            [
                'name' => 'OnePlus 12',
                'price' => '25000000',
                'category_id' => 9,
                'feature_image_name' => 'iphone-11-red-400x400.jpg',
                'feature_image_path' => '/storage/product/1/yxk0VOes50YhUcrgENem.png',
                'content' => 'Điện thoại giá rẻ tốt nhất Việt Nam',
                'views_count' => 0,
                'user_id' => 1
            ],

        ]);
    }
}
