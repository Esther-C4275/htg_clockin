<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'is_admin' => true,
            'first_name' => 'Joyce',
            'last_name' => 'Brad',
            'email' => 'brad@gmail.com',
            'password' => 'password1234',
        ]);
    }
}
