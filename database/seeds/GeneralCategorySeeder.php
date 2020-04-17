<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      DB::table('general_categories')->insert([
        'title' => 'Local Dairy',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);
    }
}
