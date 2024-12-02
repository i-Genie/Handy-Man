<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $countries = [
            ['name' => 'Nigeria', 'code' => 'NG', 'phonecode' => 234],
            // Add more countries
        ];

        foreach ($countries as $country) {
            Country::create(attributes: $country);
        }
    }
}
