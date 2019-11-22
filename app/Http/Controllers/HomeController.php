<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function viewHome(){
        // $usuario = new Usuario();
        // $listaUsuarios = $usuario->all();
        //dd($listaUsuarios);

        $listaUsuarios = Usuario::all();

        return view('home',["usuarios"=>$listaUsuarios]);
    }
                    //funcao //classe //objeto 
    public function request(Request $request, $id=0){
        if($id==0){
            echo "É necessario alguma informação";
        }else{
            dd($id);
        }

    }

    public function exibirFormulario(){
        return view('formulario');
    }

        //request super global que incorpora Get Post e File
    public function cadastrarFormulario(Request $request){
        dd($request->nome);

    }
}
