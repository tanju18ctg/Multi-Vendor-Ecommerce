<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Seller::create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'phone' => '01868332991',
            'password' => Hash::make('password'),
        ]);
    }
}
