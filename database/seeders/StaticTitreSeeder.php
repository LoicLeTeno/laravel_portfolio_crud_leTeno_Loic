<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaticTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_titres')->insert([
            [
                // USER
                'user_titre' => "Alex Smith",
                'user_p' => "I'm",
                'user_desp_1' => "Designer",
                'user_desp_2' => "Developer",
                'user_desp_3' => "Freelancer",
                'user_desp_4' => "Photographer",


                // TITRE section: About
                'about_titre' => "About",
                'about_text' => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",

                'about_sousTitre' => "UI/UX Designer & Web Developer.",
                'about_sousText' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore
                magna aliqua.",

                'about_endText' => "Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                culpa magni laudantium dolores.",


                // TITRE section: Facts
                'facts_titre' => "Facts",
                'facts_text' => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",


                // TITRE section: Skills
                'skills_titre' => "Skills",
                'skills_text' => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",


                // TITRE section: Portfolio
                'portfolio_titre' => "Portfolio",
                'portfolio_text' => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
    
                'filter_all' => "All",

                'filter_1' => "filter-app",
                'filter_1_nom' => "App",

                'filter_2' => "filter-card",
                'filter_2_nom' => "Card",

                'filter_3' => "filter-web",
                'filter_3_nom' => "Web",


                // TITRE section: Service
                'service_titre' => "Services",
                'service_text' => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",


                // TITRE section: Contact
                'contact_titre' => "Contact",
                'contact_text' => "Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            ]
        ]);
    }
}
