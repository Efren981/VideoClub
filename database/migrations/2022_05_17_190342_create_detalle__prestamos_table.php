<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_socio')->constrained('socios');
            $table->foreignId('id_prestamo')->constrained('prestamos');
            $table->foreignId('id_cinta')->constrained('cintas');
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
        Schema::dropIfExists('detalle__prestamos');
    }
}
