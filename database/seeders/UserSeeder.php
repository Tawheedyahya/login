<?php

namespace Database\Seeders;

use App\Models\User;
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
        $password='Admin@123';
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make($password),
            'role'=>0
        ]);
    }
}
