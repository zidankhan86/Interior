<?php

namespace Database\Seeders;

use App\Models\PortfolioType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PortfolioType::create([

            "type_name"=>"Architectural",
            "status"=>"1",
            "slug"=>"architectural"

           ]);

           PortfolioType::create([

            "type_name"=>"Residential",
            "status"=>"2",
            "slug"=>"residential"

           ]);


    }
}
