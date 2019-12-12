<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {        

            $table->increments('id');

            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->integer('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('id')->on('modelos');
            

            $table->string('titulo');
            $table->decimal('preco',6,2);
            $table->integer('ano');
            $table->string('cor');
            $table->string('portas');
            $table->string('quilometragem');            
            $table->string('combustivel');            
            $table->string('placa');  
            $table->string('aceitaTroca');  
            $table->string('unicoDono');  
            $table->string('cambio');  
            $table->string('direcao');  
            $table->string('potenciaMotor');  
            $table->text('descricao');
            $table->text('opcionais');
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('publicar',['sim','nao'])->default('nao');
            $table->string('imagem')->nullable();

            /* $table->integer('ordem')->nullable();  */

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
        Schema::dropIfExists('carros');
    }
}
