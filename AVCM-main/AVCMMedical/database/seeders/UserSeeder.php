<?php

namespace Database\Seeders;

use App\Models\LoginModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // public function run()
       {
        LoginModel::create([
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
    }
}
