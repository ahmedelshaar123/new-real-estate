<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::create([
           'title_ar' => 'خبر' ,
           'title_en' => 'News' ,
            'desc_ar' => '<p class="main-color lead">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                                </p>',
            'desc_en' => '<p class="main-color lead">
A company specialized in real estate, commercial, investment and residential marketing and it has a variety of products covering all sectors</p>',
        ]);

        \App\Models\Photo::create([
            'path' => 'uploads/posts/villa1.png' ,
            'photoable_id' => '1' ,
            'photoable_type' => 'App\Models\Post',
        ]);

        \App\Models\PostService::create([
            'post_id' => '1' ,
            'service_id' => '1' ,
        ]);


    }
}
