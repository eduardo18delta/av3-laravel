<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes' , function($table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->date('dtnascimento');
            $table->string('estadocivil', 30);
            $table->string('telefone', 15);
            $table->string('endereco', 150);
            $table->string('usuario', 20);
            $table->string('senha' , 20);
            $table->string('cpf' , 14);
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
        //
    }
}
