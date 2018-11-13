<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalhes_artigo extends Model
{
    protected $table = 'tb_detalhe_artigo';
    protected $primaryKey = 'id_detalhe';
    protected $fillable = ['titulo','subtitulo', 'ultima_atualizacao', 'conteudo_artigo', 'permalink'];

    public function artigo(){               //no do campo na tabela ARTIGO
        return $this->hasOne(Artigo::class, 'idtb_artigo');

    }


    
}
