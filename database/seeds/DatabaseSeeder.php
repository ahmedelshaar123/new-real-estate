<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ContactsTableSeeder::class);
         $this->call(EmailSubscriptionsTableSeeder::class);
         $this->call(PartnersTableSeeder::class);
         $this->call(BottomSlidersTableSeeder::class);
         $this->call(CompanyTeamTableSeeder::class);
         $this->call(ServicesTableSeeder::class);
         $this->call(SettingsTableSeeder::class);
         $this->call(TopSlidersTableSeeder::class);
         $this->call(FeaturedEstatesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(StaticPagesTableSeeder::class);

    }
}
