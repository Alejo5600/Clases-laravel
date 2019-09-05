<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApadrinadosAcudientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apadrinados_acudientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_apadrinado");
            $table->unsignedBigInteger("id_acudiente");
            $table->string("tipo_relacion");
            $table->timestamps();
            $table->foreign('id_apadrinado')
                ->references('id')
                ->on('apadrinados');
            $table->foreign('id_acudiente')
                ->references('id')
                ->on('acudientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apadrinados_acudientes');
    }
}
