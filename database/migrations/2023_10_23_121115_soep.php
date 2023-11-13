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
        Schema::create('soepgerechts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soupName');
            $table->string('price');
            $table->string('description');
            $table->string('ingredients');
            $table->timestamps();
        });
        DB::table('soepgerechts')->insert([
            [
                'id' => 1,
                'soupName' => 'Franse Uiensoep',
                'price' => '€9,99',
                'description' => 'Een hartige soep op basis van uien, met gegratineerde kaas bovenop en een stukje knapperig stokbrood.',
                'ingredients' => 'Uien, bouillon, stokbrood, kaas'
            ],

            [
                'id' => 2,
                'soupName' => 'Tomatensoep',
                'price' => '€7,99',
                'description' => 'Een warme, hartige tomatensoep bereid met rijpe tomaten, uien, knoflook en kruiden. Geserveerd met een vleugje room en verse basilicumblaadjes.',
                'ingredients' => 'Tomaten, uien, knoflook, groentebouillon, room, basilicum, kruiden'
            ],

            [
                'id'=> 3,
                'startersName' => 'Prei-Room soep',
                'price'=>'€10,99',
                'description' => 'Deze soep heeft een zachte, milde uiensmaak van prei, gecombineerd met de romigheid van aardappelen.',
                'ingredients' => 'preien, uien, aardappelen, groentebouillon, olijfolie, kruiden & room'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soepgerechts');
    }
};
