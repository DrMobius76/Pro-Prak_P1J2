<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voorgerechts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('startersName');
            $table->string('price');
            $table->string('description');
            $table->string('ingredients');
            $table->timestamps();
        });
        DB::table('voorgerechts')->insert([
            [
                'id' => 1,
                'startersName' => 'Caprese Salade',
                'price' => '€10,99',
                'description' => 'Een klassieke Italiaanse salade met plakjes sappige tomaten, verse mozzarella, basilicumblaadjes en een scheutje balsamicoazijn en olijfolie.',
                'ingredients' => 'Tomaten, mozzarella, basilicum, balsamicoazijn, olijfolie'
            ],

            [
                'id' => 2,
                'startersName' => 'Garnalencocktail',
                'price' => '€21,99',
                'description' => 'Gepelde garnalen geserveerd op een bedje van knapperige ijsbergsla, met een romige cocktailsaus en een partje citroen.',
                'ingredients' => 'Gepelde garnalen, ijsbergsla, cocktailsaus, citroen'
            ],

            [
                'id'=> 3,
                'startersName' => 'Carpaccio van rundvlees met rucola en Parmezaanse kaas',
                'price'=>'€28,99',
                'description' => 'Dit elegante gerecht biedt een perfecte balans tussen mals rundvlees, pittige rucola en de hartige smaak van Parmezaanse kaas.',
                'ingredients' => 'rundvlees, rucola, Parmezaanze kaas, olijfolie & Balsamicoazijn'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voorgerechts');
    }
};
