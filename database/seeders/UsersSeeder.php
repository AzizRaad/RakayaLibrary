<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin User
            [
                'username' => 'SuperAdmin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('1q1q2w2w'),
            ],
            // Test User
            [
                'username' => 'azizbooks',
                'email' => 'aziz@aziz.com',
                'password' => Hash::make('1q1q2w2w'),
            ],
        ]);
    }
}
