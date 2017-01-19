<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Matricula',10);
            $table->string('Nome',50);
            $table->date('DataNascimento');
            $table->string('Sexo',1);
            $table->string('TelResidencial',15)->nullable();

            $table->string('Pai',50);
            $table->string('CelPai',15)->nullable();
            $table->string('TelTrabPai',15)->nullable();
            $table->string('RamalTrabPai',5)->nullable();
            $table->string('EmailPai',30)->nullable();

            $table->string('Mae',50);
            $table->string('CelMae',15)->nullable();
            $table->string('TelTrabMae',15)->nullable();
            $table->string('RamalTrabMae',5)->nullable();
            $table->string('EmailMae',30)->nullable();

            $table->string('TipoSanguineo',3);
            $table->string('FatorRH',2);
            $table->boolean('ReacaoAlergica')->default(0);

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
        Schema::dropIfExists('alunos');
    }
}
