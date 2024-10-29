<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Admin Jajar 3',
            'email' => 'pasebanjargum@gmail.com',
            'password' => Hash::make('pasarkamardikan2024'),
            'admin' => '1',
        ]);
    }
}
