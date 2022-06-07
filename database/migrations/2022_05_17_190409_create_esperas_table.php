<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsperasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('esperas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_socio')->constrained('socios');
        $table->foreignId('id_pelicula')->constrained('peliculas');
        $table->string('prioridad',3);
        $table->date('fecha');
        $table->string('estado',3);
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('esperas');
    }
}
