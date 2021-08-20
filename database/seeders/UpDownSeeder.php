<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpDownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('up_downs')->insert([
            [
                // HEADER   
                'user' => "Alex Smith",

                'lien_twitter' => "#",
                'icon_twitter' => "bx bxl-twitter",
    
                'lien_facebook' => "#",
                'icon_facebook' => "bx bxl-facebook",
    
                'lien_instagram' => "#",
                'icon_instagram' => "bx bxl-instagram",
    
                'lien_skype' => "#",
                'icon_skype' => "bx bxl-skype",
    
                'lien_linkedin' => "#",
                'icon_linkedin' => "bx bxl-linkedin",
    
                // HEADER nav
                'icon_home' => "bx bx-home",
                'p_home' => "Home",
    
                'icon_about' => "bx bx-user",
                'p_about' => "About",
    
                'icon_portfolio' => "bx bx-book-content",
                'p_portfolio' => "Portfolio",
    
                'icon_services' => "bx bx-server",
                'p_services' => "Services",
    
                'icon_contact' => "bx bx-envelope",
                'p_contact' => "Contact",
    
    
                // FOOTER
                'copyright' => "© Copyright",
                'suite_copyright' => "iPortfolio",
    
                'designe' => "Designed by",
                'lien_designe' => "https://bootstrapmade.com/",
                'nom_design' => "BootstrapMade",

            ]
        ]);
    }
}
