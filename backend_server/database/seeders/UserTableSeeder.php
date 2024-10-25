<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
           'name' => 'Test User',
            'email' => 'test@gmail.com',
            'phone' => '01868332991',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            AdminTableSeeder::class,
            SellerTableSeeder::class,
        ]);
    }
}
