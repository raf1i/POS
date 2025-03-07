<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = 
        [
            ['name' => 'rfi','email' => 'rfi@abudata.com','password' => bcrypt('kategori makanan')],
            ['name' => 'rafi','email' => 'rafi@abudata.com','password' => bcrypt('kategori makanan')],
            ['name' => 'rafia','email' => 'rafia@abudata.com','password' => bcrypt('kategori makanan')],
        ];
        \App\Models\User::insert($data);
    }
}
