<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icon' => "icofont-computer",
                'title' => "Lorem Ipsum",
                'desp' => "Voluptatum deleniti atque corrupti quos dolores et quas molestias
                excepturi sint occaecati cupiditate non provident",
            ],
            [
                'icon' => "icofont-chart-bar-graph",
                'title' => "Dolor Sitema",
                'desp' => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat tarad limino ata",
            ],
            [
                'icon' => "icofont-earth",
                'title' => "Sed ut perspiciatis",
                'desp' => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur",
            ],
            [
                'icon' => "icofont-image",
                'title' => "Magni Dolores",
                'desp' => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum",
            ],
            [
                'icon' => "icofont-settings",
                'title' => "Nemo Enim",
                'desp' => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum deleniti atque",
            ],
            [
                'icon' => "icofont-tasks-alt",
                'title' => "Eiusmod Tempor",
                'desp' => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                tempore, cum soluta nobis est eligendi",
            ]
        ]);
    }
}
