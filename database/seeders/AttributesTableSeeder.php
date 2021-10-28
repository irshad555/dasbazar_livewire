<?php

namespace Database\Seeders;
use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a size attribute
        Attribute::create([
            
            'name'          =>  'Size',
            'frontend_type' =>  'select',
           
        ]);

        // Create a color attribute
        Attribute::create([
          
            'name'          =>  'Color',
            'frontend_type' =>  'select',
            
        ]);
    }
}
