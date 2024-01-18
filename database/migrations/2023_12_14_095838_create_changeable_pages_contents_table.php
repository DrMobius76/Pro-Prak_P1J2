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
        Schema::create('changeable_pages_contents', function (Blueprint $table) {
            $table->id();
            $table->string('header')->nullable();
            $table->string('content');
            $table->timestamps();
        });

        DB::table('changeable_pages_contents')->insert([
            [
                'header' => 'Het restaurant',
                'content' => 'Welkom bij Restaurant Rocambolesque, waar gastronomie en avontuur samenkomen. Ons verhaal begint met twee vrienden, Usem Alaoui en Finn Pinneau, die hun passie voor de culinaire wereld bundelen en de droom van een eigen restaurant verwezenlijken. Met jarenlange ervaring in de horeca hebben ze besloten om de traditionele paden te verlaten en iets nieuws te creëren.',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changeable_pages_contents');
    }
};
