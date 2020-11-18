<?php

use Illuminate\Database\Seeder;

class FeaturedEstatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\FeaturedEstate::create([
            'title_ar' => 'فيلا للبيع',
            'title_en' => 'Villa For Sale',
            'address_ar' => 'مصر',
            'address_en' => 'Egypt',
        ]);

        $values = [
            [
                'path' => 'uploads/featured estates/villa1.png',
                'photoable_type' => 'App\Models\FeaturedEstate',
                'photoable_id' => '1',
            ],

            [
                'path' => 'uploads/featured estates/villa.png',
                'photoable_type' => 'App\Models\FeaturedEstate',
                'photoable_id' => '1',
            ],
        ];

        foreach ($values as $value) {
            \App\Models\Photo::create($value);
        }




    }
}
