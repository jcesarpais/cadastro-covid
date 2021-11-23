<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->char('genero', 1);
            $table->integer('sus');
            $table->string('RG', 10);
            $table->string('CPF', 15);
            $table->string('CEP', 10);
            $table->string('ENDERECO', 100);
            $table->string('CIDADE', 100);
            $table->string('ESTADO', 100);
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
        Schema::dropIfExists('cadastro');
    }
}
