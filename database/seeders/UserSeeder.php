<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(200)->create();

        User::create([
            'name' => 'fadli',
            'email' => 'fadli@hp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        
        ]);

    }
}
