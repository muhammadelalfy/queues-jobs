<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'user3@user.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Andre',
            'email' => 'andre@andre.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Tony Stark',
            'email' => 'tony@avengers.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Thor',
            'email' => 'thor@avengers.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
