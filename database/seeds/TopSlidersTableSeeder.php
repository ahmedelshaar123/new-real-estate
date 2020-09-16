<?php

use Illuminate\Database\Seeder;

class TopSlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TopSlider::create([
           'title_ar' => 'عنوان',
           'title_en' => 'Title',
           'desc_ar' => '<p class="text-center lead">
                                شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                            </p>',
           'desc_en' => '<p class="text-center lead">
                                A company specialized in real estate, commercial, investment and residential marketing and it has a variety of products covering all sectors
                            </p>',
        ]);

        \App\Models\Photo::create([
            'photoable_id' => 1,
            'photoable_type' => 'App\Models\TopSlider',
            'path' => 'uploads/top sliders/slider.png',
        ]);
    }
}
