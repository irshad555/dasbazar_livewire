<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use Faker\Factory as Faker;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
          DB::table('countries')->insert([
              'name' => $faker->country,
              'timezones'=> "ist",
              'currency'=>$faker->currencyCode,
              
             
              
          ]);
      }
    }
}
