<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                'icon' => "icofont-simple-smile",
                'number' => 232,
                'titre' => "Happy Clients",
                'desp_titre' => "consequuntur quae",
            ],
            [
                'icon' => "icofont-document-folder",
                'number' => 521,
                'titre' => "Projects",
                'desp_titre' => "adipisci atque cum quia aut",
            ],
            [
                'icon' => "icofont-live-support",
                'number' => 1463,
                'titre' => "Hours Of Support",
                'desp_titre' => "aut commodi quaerat",
            ],
            [
                'icon' => "icofont-users-alt-5",
                'number' => 15,
                'titre' => "Hard Workers",
                'desp_titre' => "rerum asperiores dolor",
            ]
        ]);
    }
}
