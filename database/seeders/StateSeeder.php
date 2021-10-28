<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\State;


class StateSeeder extends Seeder
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
          DB::table('states')->insert([
              'name' => $faker->state,
              'country_id'=>"1",
              'country_code'=>"uy4",
              
         ]);
        }
    }
}
