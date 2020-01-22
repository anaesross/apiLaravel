<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tecnologia;
use App\Profissional;


class ProfissionalController extends Controller
{
    public function listarProfissionais(){
        $listaProfissionais = Profissional::all();//retorna todos os dados 
        return response()->json($listaProfissionais); //rota da api - api retorna json e não view
        }

    public function criarProfissional(Request $request){
        $newProfissional = new Professional();
        $newProfissional->nome = $request->nome;
        $newProfissional->github = $request->github;

        $result = $newProfissional->save();
        
        return response()->json($newProfissional);
    }
}
