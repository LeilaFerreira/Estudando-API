<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Artigo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_artigo', function (Blueprint $table) {
            $table->integer('user_fk')->unsigned();
            $table->integer('detalhes_artigo_fk')->unsigned();
            $table->integer('comentarios_fk')->unsigned();

            $table->increments('idtb_artigo')->nullable();
            $table->foreign('user_fk')->references('id_user')->on('tb_users');
            $table->foreign('detalhes_artigo_fk')->references('id_detalhe')->on('tb_detalhe_artigo');
            $table->foreign('comentarios_fk')->references('id_comentarios')->on('tb_comentarios')->nullable();
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
        Schema::dropIfExists('tb_artigo');
    }
}
