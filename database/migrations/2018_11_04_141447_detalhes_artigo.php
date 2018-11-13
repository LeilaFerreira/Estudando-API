<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalhesArtigo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detalhe_artigo', function (Blueprint $table) {
            $table->increments('id_detalhe')->nullable();
            $table->string('titulo',255);
            $table->string('subtitulo',255);
            $table->timestamp('data_publicacao');
            $table->timestamp('data_ultima_atualizacao')->nullable();
            $table->string('conteudo_artigo');
            $table->string('permalink')->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('tb_detalhe_artigo');
    }
}
