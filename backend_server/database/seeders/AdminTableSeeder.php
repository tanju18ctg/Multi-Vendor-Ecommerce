<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '01868332991',
            'password' => Hash::make('password'),
        ]);
    }
}
