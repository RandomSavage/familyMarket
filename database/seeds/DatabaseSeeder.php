<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {


      $this->call(GeneralCategorySeeder::class);
      $this->call(GeneralItemSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(RolesTableSeeder::class);
      $this->call(GeneralSettingSeeder::class);
      $this->call(SeoSettingSeeder::class);
      $this->call(SocialSettingSeeder::class);

    }
}
