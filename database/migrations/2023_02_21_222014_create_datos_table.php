<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->mediumText('intro');
            $table->mediumText('general');
            $table->mediumText('info_website');
            $table->string('wa_matriz');
            $table->string('wa_sa');
            $table->string('wa_ss');
            $table->string('fijo_matriz');
            $table->string('fijo_sa');
            $table->string('fijo_ss');
            $table->mediumText('horario_matriz_semana');
            $table->mediumText('horario_matriz_sabado');
            $table->mediumText('horario_matriz_domingo');
            $table->mediumText('horario_sa_semana');
            $table->mediumText('horario_sa_sabado');
            $table->mediumText('horario_sa_domingo');
            $table->mediumText('horario_ss_semana');
            $table->mediumText('horario_ss_sabado');
            $table->mediumText('horario_ss_domingo');
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
        Schema::dropIfExists('datos');
    }
};
