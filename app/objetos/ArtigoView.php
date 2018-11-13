<?php

namespace App\objetos;

class ArtigoView {

    private $titulo;
    private $subtiutlo;
    private $conteudoArtigo;
    private $permalink;

    

    public function getPermalink(){
        return $this->permalink;
    }
    
    public function setPermalink($permalink){
        $this->permalink=$permalink;
    }

    
    public function getConteudoArtigo(){
        return $this->conteudoArtigo;
    }
    
    public function setconteudoArtigo($conteudoArtigo){
        $this->conteudoArtigo=$conteudoArtigo;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }


    public function getSubtiutlo(){
        return $this->subtiutlo;
    }
    
    public function setSubtiutlo($subtiutlo){
        $this->subtiutlo = $subtiutlo;
    }

}

?>