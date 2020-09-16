<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
           'name' => 'Ahmed',
           'email' => 'real@gmail.com',
           'password' => bcrypt('123123'),
        ]);

        $user->assignRole('Super Admin');
    }
}
