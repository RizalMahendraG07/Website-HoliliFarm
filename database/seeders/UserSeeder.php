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
    public function run()
    {
        User::create([
            'name' => 'Holili',
            'email' => 'holilifarm@yahoo.com',
            'password' => Hash::make('123')
        ]);
    }
}
