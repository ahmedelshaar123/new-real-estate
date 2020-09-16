<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Partner::create([
            'link' => 'https://www.stcpay.com.sa/',
        ]);

        \App\Models\Photo::create([
            'path' => 'uploads/partners/STC-pay-01.png',
            'photoable_type' => 'App\Models\Partner',
            'photoable_id' => '1',
        ]);
    }
}
