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
        $tecnologiaId = $request->tecnologia;
        $newProfissional = new Profissional();
        $newProfissional->nome = $request->nome;
        $newProfissional->github = $request->github;
        
        $result = $newProfissional->save();
        
        $tecnologia = Tecnologia::find($tecnologiaId);

        if($tecnologia){
            $tecnologia->profissionais()->attach($newProfissional->id); //função do laravel para agregar a informação de outra tabela
        }else{
            return response()->json(["error"=>"O id da tecnologia nao existe!"]);
        }
            return response()->json($newProfissional);
    }
}
