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
        Schema::create('changeable_homepages', function (Blueprint $table) {
            $table->id();
            $table->longText('header')->nullable();
            $table->longText('pElement1')->nullable();
            $table->longText('pElement2')->nullable();
            $table->longText('pElement3')->nullable();
            $table->longText('pElement4')->nullable();
            $table->timestamps();
        });

        DB::table('changeable_homepages')->insert([
            [
                'header' => 'Restaurant Rocambolesque',
                'pElement1' => 'Ontdek Restaurant Rocambolesque, opgericht door vrienden Usem Alaoui en Finn Pinneau. Geïnspireerd door Finns overgrootouders uit het noorden van Frankrijk, streven we naar eigentijdse gastronomie.',
                'pElement2' => 'Ons dynamische menu verandert met de seizoenen, met hoogwaardige ingrediënten voor verrassende gerechten. Bij speciale gelegenheden bieden we unieke arrangementen aan.',
                'pElement3' => 'Stap binnen en laat u verwennen door de unieke smaken van Rocambolesque.',
                'pElement4' => 'Welkom bij een culinair avontuur!',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changeable_homepages');
    }
};
