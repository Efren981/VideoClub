<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_actores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('idDirector')->constrained('directores');
            $table->foreignId('idPelicula')->constrained('peliculas');
            $table->foreignId('idPelicula')->constrained('peliculas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_actores');
    }
};
