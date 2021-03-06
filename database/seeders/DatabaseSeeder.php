<?php

namespace Database\Seeders;

use App\Models\StaticTitre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UpDownSeeder::class,
            StaticTitreSeeder::class,
            AboutSeeder::class,
            FactsSeeder::class,
            SkillsSeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            ContactSeeder::class
        ]);
    }
}
