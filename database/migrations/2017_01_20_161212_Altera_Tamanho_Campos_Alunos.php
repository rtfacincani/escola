<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlteraTamanhoCamposAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            //
            $table->string('CelPai', 35)->nullable()->change();
            $table->string('CelMae', 35)->nullable()->change();
            $table->string('CelPai', 35)->nullable()->change();
            $table->string('TelTrabPai', 35)->nullable()->change();
            $table->string('TelTrabMae', 35)->nullable()->change();
            $table->string('TelResidencial', 35)->nullable()->change();
            $table->string('RGPai', 20)->nullable()->change();
            $table->string('RGMae', 20)->nullable()->change();
            $table->string('CPFPai', 20)->nullable()->change();
            $table->string('CPFMae', 20)->nullable()->change();
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
            //
        });
    }
}
