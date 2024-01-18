<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us_edits', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('image')->nullable();
            $table->string('header1')->nullable();
            $table->string('content1', 600);
            $table->string('header2')->nullable();
            $table->string('content2', 600);
            $table->string('header3')->nullable();
            $table->string('content3', 600);
            $table->string('header4')->nullable();
            $table->string('content4', 600);
            $table->timestamps();
        });

        DB::table('about_us_edits')->insert([
            'title' => 'About us',
            'image' => 'Restaurant.jpg',
            'header1' => 'Het restaurant',
            'content1' => "Welkom bij Restaurant Rocambolesque, waar gastronomie en avontuur samenkomen. Ons verhaal begint met twee vrienden, Usem Alaoui en Finn Pinneau, die hun passie voor de culinaire wereld bundelen en de droom van een eigen restaurant verwezenlijken. Met jarenlange ervaring in de horeca hebben ze besloten om de traditionele paden te verlaten en iets nieuws te creëren.",
            'header2' => 'Over de eigenaren',
            'content2' => "Usem, een ervaren kok met een verlangen naar vernieuwing, vond in Finn, afgestudeerd in restaurantmanagement, de perfecte partner om samen de uitdaging aan te gaan. Het was het moment voor Finn om zijn opgedane kennis in praktijk te brengen en voor Usem om de rol van souschef achter zich te laten en de titel van chef-kok te omarmen. Samen smeedden ze een partnerschap en gaven ze vorm aan de visie van een uniek culinair paradijs.",
            'header3' => 'Naam & Geschiedenis',
            'content3' => "De naam 'Rocambolesque' draagt een vleugje familiegeschiedenis met zich mee. Het betekent 'fantastisch' in het Frans en is een eerbetoon aan Finn's overgrootouders, die ooit een gelijknamig restaurant in het noorden van Frankrijk beheerden. Echter, in de geest van vernieuwing kozen Usem en Finn ervoor om een eigentijdse draai te geven aan de traditie. Bij Rocambolesque streven we ernaar om een levendige en eigentijdse sfeer te creëren, gecombineerd met een menu dat de diversiteit van seizoensgebonden gerechten van over de hele wereld weerspiegelt.",
            'header4' => 'Menu & ingrediënten',
            'content4' => "Onze keuken is een viering van smaken, waarbij we de hoogste kwaliteit ingrediënten gebruiken in vaste arrangementen en menu's die met de seizoenen veranderen. Bij speciale gelegenheden en feestdagen willen we onze gasten verrassen met unieke culinaire ervaringen, die net zo memorabel zijn als de gelegenheid zelf."
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_edits');
    }
};
