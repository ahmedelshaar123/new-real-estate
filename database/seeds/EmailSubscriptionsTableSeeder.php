<?php

use Illuminate\Database\Seeder;

class EmailSubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\EmailSubscription::create([
           'email' => 'a@a.com',
        ]);
    }
}
