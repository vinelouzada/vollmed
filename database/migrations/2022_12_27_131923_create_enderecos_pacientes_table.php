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
        Schema::create('enderecos_pacientes', function (Blueprint $table) {
            $table->id();
            $table->string("logradouro",96);
            $table->string("bairro", 96);
            $table->string("cep",10);
            $table->string("cidade",96);
            $table->string("uf",10);
            $table->string("numero",10)->nullable();
            $table->string("complemento",96)->nullable();
            $table->unsignedBigInteger("paciente_id");
            $table->foreign("paciente_id")->references("id")->on("pacientes");
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
        Schema::dropIfExists('enderecos_pacientes');
    }
};
