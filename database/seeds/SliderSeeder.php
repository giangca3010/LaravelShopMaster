<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'name' => 'Ấm Áp Noel Sắm Ngay Điện Thoại Mới',
                'description' => 'Tặng kèm dịch vụ ông già Noel khi mua điện thoại trước ngày 23/12',
                'image_path' => 'Eshopper/images/home/samsung-galaxy-s20.jpg',
                'image_name' => 'samsung-galaxy-s20.jpg'
            ],
            [
                'name' => 'Khuyến Mại 50% Tưng Bừng Trung Thu',
                'description' => 'Trung thu tưng bừng khuyến mại mua 1 tặng 1. Mua một điện thoại tặng ngay một ốp điện thoại..',
                'image_path' => 'Eshopper/images/home/samsung-galaxy-note-10-plus.jpg',
                'image_name' => 'samsung-galaxy-note-10-plus.jpg'
            ],
            [
                'name' => 'Sale 70% Tưng Bừng Quốc Khánh',
                'description' => 'Quốc khánh mua 1 tặng 2. Mua một điện thoại tặng ngay hai móc chìa khóa..',
                'image_path' => 'Eshopper/images/home/oppo-a52-black.jpg',
                'image_name' => 'oppo-a52-black.jpg'
            ],

        ]);
    }
}
