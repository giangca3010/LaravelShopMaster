<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Iphone', 'slug' => 'iphone', 'parent_id' => 0],
            ['name' => 'Samsung', 'slug' => 'samsung', 'parent_id' => 0],
            ['name' => 'Blackberry', 'slug' => 'blackberry', 'parent_id' => 0],
            ['name' => 'Bphone', 'slug' => 'bphone', 'parent_id' => 0],
            ['name' => 'Xiaomi', 'slug' => 'xiaomi', 'parent_id' => 0],
            ['name' => 'Oppo', 'slug' => 'oppo', 'parent_id' => 0],
            ['name' => 'Vsmart', 'slug' => 'vsmart', 'parent_id' => 0],
            ['name' => 'Huawei', 'slug' => 'huawei', 'parent_id' => 0],
            ['name' => 'OnePlus', 'slug' => 'oneplus', 'parent_id' => 0],
            ['name' => 'IPhone Mới', 'slug' => 'iphone-new', 'parent_id' => 1],
            ['name' => 'IPhone Cũ', 'slug' => 'iphone-second', 'parent_id' => 1],
            ['name' => 'Samsung Note', 'slug' => 'samsung-note', 'parent_id' => 2],
            ['name' => 'Samsung Galaxy', 'slug' => 'samsung-galaxy', 'parent_id' => 2],
            ['name' => 'Blackberry Mới', 'slug' => 'blackberry-new', 'parent_id' => 3],
            ['name' => 'Blackberry Cũ', 'slug' => 'blackberry-second', 'parent_id' => 3],
        ]);
    }
}
