<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artigo;
use App\objetos\ArtigoView;
use App\Detalhes_artigo;


class BlogController extends Controller
{
    
    public function adicionarArtigo(Request $request){
        
      try{  
                $detalheArtigo = Detalhes_artigo::create([
                    'titulo' => $request->titulo,
                    'subtitulo' => $request->subtitulo,
                    'conteudo_artigo' => $request->conteudoArtigo,
                    'permalink' =>  $request->permalink
                ]);
                
                
                //Loop para pegar os Idusers que criaram o post no blog
                foreach ($request->autores as $value) {
                        foreach ($value as $user) {
                            $artigo = Artigo::create([
                                'user_fk'=> $user
                            ]);
                            $artigo->detalhesArtigo()->associate( $detalheArtigo);
                            $artigo->save();
                        }
                }

                return "OK";

        }catch (Exception $e) {
            return "Serviço indisponivel";
        }
    }

   
    public function adicionarComentario(Request $request){}
    public function excluirComentario(Request $request){}
    public function editarComentario(Request $request){}
    public function listarComentario(){}
    
    public function exibirArtigo(Request $request){}
    public function editarArtigo(Request $request){}
    public function excluirArtigo(Request $request){}
    public function listarUrlsArtigo(){}
    




}
