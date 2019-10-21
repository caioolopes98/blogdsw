<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\usuario;
use App\comentario;

class PostController extends Controller
{
    //
    public function index($id){
        return view('novoPost')->with('id', $id);
    }

    public function inicio($id){
      

        $posts = post::latest()->get();    
        $usuario = usuario::find($id);


        return view('inicio')->with('usuario', $usuario)->with('id', $id)->with('posts', $posts);
    }

    public function comentar(Request $request, $id_post, $id_usuario){
        $comentario = new comentario;
        $comentario->texto = $request->texto;
        $comentario->id_usuario = $id_usuario;
        $comentario->id_post = $id_post;
        $comentario->nome_usuario = usuario::where('id', $id_usuario)->first()->nome;
        $comentario->save();

        return redirect()->back();
    }

    public function comentarios($id_post, $id_usuario){
        $post = post::where('id', $id_post)->first();
        $comentarios = comentario::where('id_post', $id_post)->get();
        return view('comentarios')->with('post', $post)->with('id_usuario', $id_usuario)->with('comentarios', $comentarios);
    }


    public function create(Request $request, $id){
        $post = new post;
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->id_usuario = $id;
        $post->nome_usuario = usuario::where('id', $id)->first()->nome;
        $post->save();


        $posts = post::latest()->get();    
        $usuario = usuario::find($id);


        return view('inicio')->with('usuario', $usuario)->with('id', $id)->with('posts', $posts);

        
    }
}
