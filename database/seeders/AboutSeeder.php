<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'p_birthday' => "Birthday:",
                'birthday' => "1 May 1995",
    
                'p_website' => "Website:",
                'website' => "www.example.com",
    
                'p_phone' => "Phone:",
                'phone' => "+123 456 7890",
    
                'p_city' => "City:",
                'city' => "City : New York, USA",
    
                'p_age' => "Age:",
                'age' => 30,
    
                'p_degree' => "Degree:",
                'degree' => "Master",
    
                'p_email' => "PhEmailone:",
                'email' => "email@example.com",
    
                'p_freelance' => "Freelance:",
                'freelance' => "Available",
            ]
        ]);
    }
}
