<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('seo_settings')->insert([
        'description' => "Family Market General Store is more than just a fruit and vegatable Stand. Breakfast, Honey, Jams, Butter, milk, veggies, Gifts, Local made crafts, Animal Feed and Supplies, Garden Section. Located in DEcatur Tn, Right After 4 Corners on the way to Watts Bar.",
        'keywords' => "Vegatables, Farm to Table, Meats, Dairy, Feed Store, Garden Plants, Watts Bar, Food",
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
      ]);
    }
}
