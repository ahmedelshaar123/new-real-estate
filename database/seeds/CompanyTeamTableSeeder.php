<?php

use Illuminate\Database\Seeder;

class CompanyTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CompanyTeam::create([
            'name_ar' => 'أحمد',
            'name_en' => 'Ahmed',
            'job_ar' => 'مبرمج',
            'job_en' => 'Developer',
            'fb_url' => 'http://www.facebook.com',
        ]);

        \App\Models\Photo::create([
            'path' => 'uploads/company team/team1.png',
            'photoable_type' => 'App\Models\CompanyTeam',
            'photoable_id' => '1',
        ]);
    }
}
