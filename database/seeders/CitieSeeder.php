<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use Faker\Factory as Faker;

class CitieSeeder extends Seeder
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
          DB::table('cities')->insert([
              'name' => $faker->city,
              'state_id'=>"1",
              'country_id'=>"1",
              'country_code'=>"uy4",
              'state_code'=>"zs",
              
         ]);
        }
    }
}
