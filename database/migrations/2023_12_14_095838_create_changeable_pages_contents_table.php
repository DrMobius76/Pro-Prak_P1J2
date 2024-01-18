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
                'content' => 'Too long, please fix me aaaaaaa.',
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
