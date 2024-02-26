<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            //Book
            [
                'name'=>'Thaqafa',
                'author'=>'UQU'
            ],
            //Book
            [
                'name'=>'AI',
                'author'=>'Sadaia'
            ],
            //Book
            [
                'name'=>'Mathmatics',
                'author'=>'MOE'
            ],
            //Book
            [
                'name'=>'xxx',
                'author'=>'yyy'
            ],
        ]);
    }
}
