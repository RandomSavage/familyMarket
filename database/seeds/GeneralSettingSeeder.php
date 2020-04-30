<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

          DB::table('general_settings')->insert([
          'site_title' => 'Family Market General Store',
          'logo_image_url' => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Frestaurantlussier.com%2Fwp-content%2Fuploads%2F2017%2F11%2Fmenu_icon.png&f=1&nofb=1",
          'address_1' => '2678 State Highway 68 W',
          'address_2' => '',
          'city' => 'Decatur',
          'state' => 'Tn',
          'zipcode' => '37322',
          'phone_number' => '1-423-454-0347',
          'updated_at' => Carbon::now(),
          'created_at' => Carbon::now()
      ]);
    }
}
