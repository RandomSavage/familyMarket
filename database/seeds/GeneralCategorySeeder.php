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
        'title' => 'Local-Dairy',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'meat',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'deli',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'vegatables',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'spreads',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'drinks',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'breakfast',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
    ]);

      DB::table('general_categories')->insert([
        'title' => 'blankets',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'art',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'gifts',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'garden',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'chicken-feed',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'horse-feed',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'goat-feed',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);

      DB::table('general_categories')->insert([
        'title' => 'supply',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image_url' => 'img/starters.png',
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);
    }
}
