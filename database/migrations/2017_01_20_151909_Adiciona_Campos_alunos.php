<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCamposAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            // Adicionando Informações de Endereço, RG e CPF nas informações do PAI e MAE
            $table->string('Endereco')->nullable()->after('TelResidencial');
            $table->string('Numero')->nullable()->after('Endereco');
            $table->string('Complemento')->nullable()->after('Numero');
            $table->string('Bairro')->nullable()->after('Complemento');
            $table->string('Municipio')->nullable()->after('Bairro');
            $table->string('Estado')->nullable()->after('Municipio');

            $table->string('RGPai')->nullable()->after('Pai');
            $table->string('CPFPai')->nullable()->after('RGPai');

            $table->string('RGMae')->nullable()->after('Mae');
            $table->string('CPFMae')->nullable()->after('RGMae');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            //Apagando as Colunas
            $table->dropColumn(['Endereco', 'Numero','Complemento','Bairro', 'Municipio','Estado','RGPai','CPFPai','RGMae','CPFMae']);
        });
    }
}
