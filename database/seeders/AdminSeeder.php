<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            "name"=>"admin",
            "phone"=>"01711111111",
            "email"=>"admin@gmail.com",
            "password"=>bcrypt('123456'),
            "role"=>"admin"

           ]);
    }
}
