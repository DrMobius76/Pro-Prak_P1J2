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
        Schema::create('hoofdgerechts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mainName');
            $table->string('price');
            $table->string('description');
            $table->string('ingredients');
            $table->timestamps();
        });
        DB::table('hoofdgerechts')->insert([
            [
                'id' => 1,
                'mainName' => 'Coq au Vin',
                'price' => '€24,99',
                'description' => 'Coq au Vin is een gerecht van gestoofde kip in rode wijn met spek, champignons, uien en knoflook. Het heeft een diepe, rijke smaak en wordt vaak geserveerd met aardappelpuree of vers brood.',
                'ingredients' => 'Kip, spek, champignons, uien, knoflook, rode wijn, bloem, boter, tijm, peterselie.'
            ],

            [
                'id' => 2,
                'mainName' => 'Boeuf Bourguignon',
                'price' => '€29,99',
                'description' => 'Een klassiek Frans stoofgerecht met mals rundvlees, wortelen, uien en champignons, gestoofd in rode wijn en op smaak gebracht met kruiden. Het wordt geserveerd met aardappelpuree of vers brood.',
                'ingredients' => 'Rundvlees, spek, champignons, uien, wortelen, rode wijn, bloem, boter, tijm, laurierblaadjes'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoofdgerechts');
    }
};
