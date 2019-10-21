<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\post;

class LoginController extends Controller
{
    //
    public function validar(Request $request){
        $posts = post::latest()->get();        
        $usuario = usuario::where('email', $request->email)->first();
        if($usuario){
            if ($usuario->senha == $request->senha){
                return view('inicio')->with('usuario', $usuario)->with('id', $usuario->id)->with('posts', $posts);
            } else {
                return redirect()->back() ->with('alert', 'Login inválido!');
            }
        }
        else{
            return redirect()->back() ->with('alert', 'Login inválido!');
        }
    }
}
