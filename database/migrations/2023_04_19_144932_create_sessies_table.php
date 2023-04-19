<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sessies', function (Blueprint $table) {
            $table->id();
            $table->string('sessienaam');
            $table->string('trainer')->nullable();
            $table->string('gebruikers_deelnemend');
            $table->integer('limiet_deelnemers');
            $table->dateTime('starting');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessies');
    }
};
