<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpDownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('up_downs', function (Blueprint $table) {
            $table->id();

            // HEADER
            $table->string('user', 30);

            $table->string('lien_twitter');
            $table->string('icon_twitter');

            $table->string('lien_facebook');
            $table->string('icon_facebook');

            $table->string('lien_instagram');
            $table->string('icon_instagram');

            $table->string('lien_skype');
            $table->string('icon_skype');

            $table->string('lien_linkedin');
            $table->string('icon_linkedin');

            // HEADER nav
            $table->string('icon_home');
            $table->string('p_home');

            $table->string('icon_about');
            $table->string('p_about');

            $table->string('icon_portfolio');
            $table->string('p_portfolio');

            $table->string('icon_services');
            $table->string('p_services');

            $table->string('icon_contact');
            $table->string('p_contact');


            // FOOTER
            $table->string('copyright');
            $table->string('suite_copyright');

            $table->string('designe');
            $table->string('lien_designe');
            $table->string('nom_design');

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
        Schema::dropIfExists('up_downs');
    }
}
