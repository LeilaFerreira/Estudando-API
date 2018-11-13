<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detalhes_artigo;

class Artigo extends Model
{
   
        protected $table = 'tb_artigo';
        protected $primaryKey = 'idtb_artigo';
        protected $fillable = ['user_fk', 'detalhes_artigo_fk', 'comentario_fk'];
    
         public function detalhesArtigo(){                //no do campo na tab Artigo - nome do campo na tabela detalhes     
                  return $this->belongsTo(Detalhes_artigo::Class, 'detalhes_artigo_fk' ,'id_detalhe' );
        }
}
