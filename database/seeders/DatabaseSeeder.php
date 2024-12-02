<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CategoryRefreshedSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'firstname' => 'austine',
            'lastname' => 'mathias',
            'phone' => '09032435464',
            'role' => 'user',
            'password' => Hash::make('pass12345'),
            'email' => 'austinemathias9@gmail.com',
        ]);

        $this->call(class: [
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            CategoryRefreshedSeeder::class,
            BusinessProfileSeeder::class,
        ]);
    }
}
