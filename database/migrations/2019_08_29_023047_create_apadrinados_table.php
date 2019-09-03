<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApadrinadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apadrinados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->unsignedBigInteger("id_padrino");
            $table->timestamps();
            $table->foreign('id_padrino')
                   ->references('id')
                    ->on('padrinos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apadrinados');
    }
}
