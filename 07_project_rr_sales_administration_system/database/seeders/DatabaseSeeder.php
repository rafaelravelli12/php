<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Establishments Generate
        \App\Models\Establishments::create([
            'identification' => '11222333000144',
            'name' => 'Global Establishment',
            'zip_code' => '',
            'address' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        \App\Models\Establishments::create([
            'identification' => '11222333000155',
            'name' => 'Local Establishment',
            'zip_code' => '',
            'address' => '',
            'city' => '',
            'state' => '',
            'country' => '',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Users Generate
        \App\Models\User::factory()->create([
            'name' => 'globaladmin',
            'email' => 'globaladmin@laravel.com',
            'role' => 'globaladmin',
            'password' => Hash::make('95!8p@2y_/#YgkzB'),
            'establishment_id' => '1'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'localadmin',
            'email' => 'localadmin@laravel.com',
            'role' => 'localadmin',
            'password' => Hash::make('95!8p@2y_/#YgkzB'),
            'establishment_id' => 2,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'operational',
            'email' => 'operational@laravel.com',
            'role' => 'operational',
            'password' => Hash::make('95!8p@2y_/#YgkzB'),
            'establishment_id' => 2
        ]);

        for ($i = 0; $i < 100; $i++) {
            \App\Models\Clients::create([
                'identification' => $faker->unique()->numerify('##############'),
                'establishment_id' => '2',
                'name' => $faker->company,
                'zip_code' => $faker->postcode,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->stateAbbr,
                'country' => 'Brazil',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
