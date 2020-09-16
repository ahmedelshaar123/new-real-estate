<?php

use Illuminate\Database\Seeder;

class BottomSlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BottomSlider::create([
            'desc_ar' => '<p class="main-color lead mb-4 text-center">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                                </p>',
            'desc_en' => '<p class="main-color lead mb-4 text-center">
A company specialized in real estate, commercial, investment and residential marketing and it has a variety of products covering all sectors</p>',
        ]);

        \App\Models\Photo::create([
            'path' => 'uploads/bottom sliders/team1.png',
            'photoable_type' => 'App\Models\BottomSlider',
            'photoable_id' => '1',
        ]);
    }
}
