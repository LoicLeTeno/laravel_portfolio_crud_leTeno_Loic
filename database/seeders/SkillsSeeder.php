<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'skill' => "HTML",
                'value' => 100,
            ],
            [
                'skill' => "CSS",
                'value' => 90,
            ],
            [
                'skill' => "JavaScript",
                'value' => 75,
            ],
            [
                'skill' => "PHP",
                'value' => 80,
            ],
            [
                'skill' => "WordPress/CMS",
                'value' => 90,
            ],
            [
                'skill' => "Photoshop",
                'value' => 55,
            ]
        ]);
    }
}
