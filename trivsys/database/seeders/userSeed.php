<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhammad',
            'email' => 'baloch@gmail.com',
            'password' => bcrypt('123456789'), // Always hash the password before saving
        ]);
    }
}
