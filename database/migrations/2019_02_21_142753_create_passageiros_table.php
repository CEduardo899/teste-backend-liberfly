<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassageirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passageiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 250);
            $table->string('telefone', 25);
            $table->string('email', 250);
            $table->string('origem', 150);
            $table->string('destino', 150);
            $table->integer('num_voo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passageiros');
    }
}
