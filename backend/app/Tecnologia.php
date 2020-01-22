<?php

namespace App;
use App\Profissional;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    protected $table = 'tecnologias'; //protected para proteger as informações da tabela , apenas as
    //classes que extends desse model podem ter acesso aos dados

    public function profissionais(){
        return $this->belongsToMany('App\Profissional', 'profissionais_has_tecnologias', 
        'tecnologia_id', 'profissional_id'); // ou (Profissional::class) , chamo a tb intermediária
        //e puxo os ids que são as fk da tabela intermediária.
    }
}
