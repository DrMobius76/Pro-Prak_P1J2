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
        Schema::create('nagerechts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dessertName');
            $table->string('price');
            $table->string('description');
            $table->string('ingredients');
            $table->timestamps();
        });
        DB::table('nagerechts')->insert([
            [
                'id' => 1,
                'dessertName' => 'Crème Brûlée',
                'price' => '€10,99',
                'description' => 'Crème Brûlée is een elegant dessert bestaande uit een romige vanillecustard, vaak geserveerd in kleine schaaltjes. Het oppervlak wordt gekarameliseerd met suiker, waardoor een knapperige, glazen suikerlaag ontstaat.',
                'ingredients' => 'Eierdooiers, suiker, vanille-extract, room, kristalsuiker'
            ],

            [
                'id' => 2,
                'dessertName' => 'Tarte Tatin',
                'price' => '€12,99',
                'description' => 'Tarte Tatin is een omgekeerde karamelappeltaart. Het wordt gemaakt door appels te karameliseren in suiker en boter op het fornuis en vervolgens bedekt met een laagje bladerdeeg en gebakken tot het deeg goudbruin is.',
                'ingredients' => 'Appels, suiker, boter, bladerdeeg'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nagerechts');
    }
};
