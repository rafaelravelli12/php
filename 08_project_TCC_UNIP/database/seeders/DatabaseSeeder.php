<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\ProductFactory;
use App\Models\ProductType;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Users Generate
        \App\Models\User::factory()->create([
            'name' => 'globaladmin',
            'email' => 'globaladmin@laravel.com',
            'role' => 'admin',
            'password' => Hash::make('95!8p@2y_/#YgkzB'),
            'placa_do_carro' => ''
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@laravel.com',
            'role' => 'user',
            'password' => Hash::make('95!8p@2y_/#YgkzB'),
            'placa_do_carro' => 'FAA1245'
        ]);
    }
}
