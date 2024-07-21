<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'administrador1',
                'email' => 'administrador1@laravel.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'administrador2',
                'email' => 'administrador2@laravel.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'administrador3',
                'email' => 'administrador3@laravel.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'administrador4',
                'email' => 'administrador4@laravel.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'administrador5',
                'email' => 'administrador5@laravel.com',
                'password' => bcrypt('password')
            ],
        ];
        DB::table('users')->insert($users);
    }
}
