<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            [
                'name_ar' => 'فيسبوك',
                'name_en' => 'Facebook',
                'value_ar' => 'https://www.facebook.com',
                'value_en' => 'https://www.facebook.com',
                'type' => 'url',
                'key' => 'facebook_url',

            ],
            [
                'name_ar' => 'تويتر',
                'name_en' => 'Twitter',
                'value_ar' => 'https://www.twitter.com',
                'value_en' => 'https://www.twitter.com',
                'type' => 'url',
                'key' => 'twitter_url',

            ],
            [
                'name_ar' => 'انستجرام',
                'name_en' => 'Instagram',
                'value_ar' => 'https://www.instagram.com',
                'value_en' => 'https://www.instagram.com',
                'type' => 'url',
                'key' => 'instagram_url',
            ],

            [
                'name_ar' =>  'البريد الالكتروني',
                'name_en' => 'Email',
                'value_ar' => 'example@gmail.com',
                'value_en' => 'example@gmail.com',
                'type' => 'email',
                'key' => 'email',
            ],
            [
                'name_ar' => 'الجوال',
                'name_en' => 'Phone',
                'value_ar' => '0200055667',
                'value_en' => '0200055667',
                'type' => 'number',
                'key' => 'phone',
            ],

            [
                'name_ar' => 'العنوان',
                'name_en' => 'Address',
                'value_ar' => 'شارع جيهان المنصورة آخر شارع المنصورة',
                'value_en' => 'Gehan Street, End Of Mansoura Street',
                'type' => 'text',
                'key' => 'address',
            ],

            [
                'name_ar' => 'مواعيد العمل',
                'name_en' => 'Work Times',
                'value_ar' => 'السبت الي الخميس من 8 صباحا الي 2 مساء',
                'value_en' => 'Saturday to Thursday from 8 am to 2 pm',
                'type' => 'text',
                'key' => 'work_times',
            ],
            [
                'name_ar' => 'خط العرض',
                'name_en' => 'Latitude',
                'value_ar' => '24.774265',
                'value_en' => '24.774265',
                'type' => 'map',
                'key' => 'lat',

            ],
            [
                'name_ar' => 'خط الطول',
                'name_en' => 'Longitude',
                'value_ar' => '46.738586',
                'value_en' => '46.738586',
                'type' => 'map',
                'key' => 'lng',

            ],


        ];
        foreach ($values as $value) {
            \App\Models\Setting::create($value);

        }
    }
}
