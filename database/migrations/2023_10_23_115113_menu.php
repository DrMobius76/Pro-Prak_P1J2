<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_name');
            $table->integer('voorgerecht_id')->references('íd')->on('voorgerechts');
            $table->integer('soep_id')->references('íd')->on('soepgerechts');
            $table->integer('hoofdgerecht_id')->references('íd')->on('hoofdgerechts');
            $table->integer('nagerecht_id')->references('íd')->on('nagerechts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
