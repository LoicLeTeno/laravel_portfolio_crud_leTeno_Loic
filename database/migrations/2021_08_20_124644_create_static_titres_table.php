<?php

use App\Models\StaticTitre;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticTitresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_titres', function (Blueprint $table) {
            $table->id();

            // USER
            $table->string('user_titre', 30);
            $table->string('user_p');
            $table->string('user_desp_1');
            $table->string('user_desp_2');
            $table->string('user_desp_3');
            $table->string('user_desp_4');

            /*
            $table->string("identifiant");
            $table->string("value");
            */


            // TITRE section: About
            $table->string('about_titre', 30);
            $table->mediumText('about_text');

            $table->string('about_sousTitre');
            $table->string('about_sousText');
            $table->mediumText('about_endText');


            // TITRE section: Facts
            $table->string('facts_titre', 30);
            $table->mediumText('facts_text');


            // TITRE section: Skills
            $table->string('skills_titre', 30);
            $table->mediumText('skills_text');


            // TITRE section: Portfolio
            $table->string('portfolio_titre', 30);
            $table->mediumText('portfolio_text');

            $table->string('filter_all');

            $table->string('filter_1');
            $table->string('filter_1_nom');

            $table->string('filter_2');
            $table->string('filter_2_nom');

            $table->string('filter_3');
            $table->string('filter_3_nom');


            // TITRE section: Service
            $table->string('service_titre', 30);
            $table->mediumText('service_text');


            // TITRE section: Contact
            $table->string('contact_titre', 30);
            $table->mediumText('contact_text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('static_titres');
    }
}
