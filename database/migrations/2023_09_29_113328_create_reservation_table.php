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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('days');
            $table->date('date');
            $table->string('time');
            $table->string('table');
            $table->string('child_chairs')->nullable();
            $table->timestamps();
        });

        DB::table('reservations')->insert([
            [
                'days' => 'monday',
                'date' => '2020-08-05',
                'time' => '15:30',
                'table' => 'table 1',
                'child_chairs' => '1 child chair'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
