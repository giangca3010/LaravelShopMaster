<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            ['config_key' => 'phone_contact', 'config_value' => '0989480463', 'type' => 'Text'],
            ['config_key' => 'Instagram_link', 'config_value' => 'https://www.instagram.com/giangca89', 'type' => 'Text'],
            ['config_key' => 'Facebook_link', 'config_value' => 'https://www.facebook.com/giangca89', 'type' => 'Text'],
            ['config_key' => 'Email', 'config_value' => 'gcgc89@gmail.com', 'type' => 'Text'],
            ['config_key' => 'Footer_infomation', 'config_value' => '<p class="pull-left">Copyright © 2013 G-CA Inc. </p> <p class="pull-right"> Designed by <span> <a target="_blank" href="http://www.fb.com/giangca89">GCmobile</a></span> </p>', 'type' => 'Textarea'],

        ]);
    }
}
