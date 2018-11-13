<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    {
        protected $table = 'tb_artigo';
        protected $primaryKey = 'id_artigo';
        protected $fillable = ['user_fk', 'detale_artigo_fk', 'comentario_fk'];
    
        /* function blog_site() {
            return $this->belongsTo('App\blog_site');
        } */
}
