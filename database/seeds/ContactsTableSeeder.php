<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contact::create([
           'name' => 'احمد',
           'email' => 'a@a.com',
           'phone' => '1111111111',
           'title' => 'عنوان',
           'message' => 'رسالة 1',
        ]);
    }
}
