<?php

use Illuminate\Database\Seeder;

class StaticPagesTableSeeder extends Seeder
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
                'name_ar' => 'الرؤية',
                'name_en' => 'Vision',
                'value_ar' => '<p class="main-color lead">
                        شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                    </p>',
                'value_en' => '<p class="main-color lead">A company specialized in real estate, commercial, investment and residential marketing and it has a variety of products covering all sectors</p>',
                'type' => 'textarea',
                'key' => 'vision',

            ],

            [
                'name_ar' => 'الرسالة',
                'name_en' => 'Message',
                'value_ar' => '<p class="main-color lead">
                        شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                    </p>',
                'value_en' => '<p class="main-color lead">A company specialized in real estate, commercial, investment and residential marketing and it has a variety of products covering all sectors</p>',
                'type' => 'textarea',
                'key' => 'message',

            ],

            [
                'name_ar' => 'العنوان',
                'name_en' => 'Title',
                'value_ar' => 'شركة عقارية تسعى فى تقديم الخدمات العقارية بمصداقية بتحقيق أقصي درجات القبول لدى العملاء',
                'value_en' => '
A real estate company that seeks to provide real estate services with credibility to achieve the highest levels of customer acceptance',
                'type' => 'text',
                'key' => 'title',
            ],

            [
                'name_ar' => 'الوصف',
                'name_en' => 'Description',
                'value_ar' => '<p class="main-color lead mb-4">
                        شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                    </p>',
                'value_en' => '<p class="main-color lead mb-4">A real estate company that seeks to provide real estate services with credibility to achieve the highest levels of customer acceptance</p>',
                'type' => 'textarea',
                'key' => 'desc',
            ],

            [
                'name_ar' => 'الوصف أسفل الصفحة',
                'name_en' => 'Footer Description',
                'value_ar' => '<p class="text-light mb-5">
                        شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                    </p>',
                'value_en' => '<p class="text-light mb-5">A company specialized in real estate, commercial, investment and residential marketing and it has a variety of products covering all sectors</p>',
                'type' => 'textarea',
                'key' => 'footer_desc',

            ],
        ];
        foreach ($values as $value) {
            \App\Models\StaticPage::create($value);
        }
    }
}
