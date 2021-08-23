<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('p_birthday', 30);
            $table->string('birthday');

            $table->string('p_website', 30);
            $table->string('website');

            $table->string('p_phone', 30);
            $table->string('phone');

            $table->string('p_city', 30);
            $table->string('city');

            $table->string('p_age', 30);
            $table->integer('age');

            $table->string('p_degree', 30);
            $table->string('degree');

            $table->string('p_email', 30);
            $table->string('email');

            $table->string('p_freelance', 30);
            $table->string('freelance');
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
        Schema::dropIfExists('abouts');
    }
}
