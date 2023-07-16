<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // setting
        DB::table('site_settings')->insert([
            //Admin
            [
                'logo' => 'upload/logo/febula.jpg',
                'support_phone' => '+880 19-06299547',
                'phone_one' => '+880 19-06299547',
                'email' => 'support@febulastore.com',
                'company_address' => 'Mirpur, Dhaka',
                'facebook' => 'https://www.facebook.com/',
                'twitter' => 'https://twitter.com/',
                'youtube' => 'https://www.youtube.com/',
                'copyright' => '© 2023 Febula store. All Rights Reserved',
            ]

        ]);
        // seo
        DB::table('seos')->insert([
            //Admin
            [
                'meta_title' => '',
                'meta_author' => 'febula',
                'meta_keyword' => '',
                'meta_description' => '',

            ]

        ]);
    }
}
