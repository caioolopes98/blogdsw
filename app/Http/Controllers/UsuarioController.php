<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\post;

class UsuarioController extends Controller
{
    //

    public function cadastro(){
        return view('cadastro');
    }

    public function create(Request $request){
        $usuario = new usuario;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();


        $posts = post::latest()->get();    
        $usuario = usuario::where('email', $request->email)->first();


        return view('inicio')->with('usuario', $usuario)->with('id', $usuario->id)->with('posts', $posts);
    }
}
