<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tecnologia;

class Profissional extends Model
{
    protected $table = 'profissionais';

    public function tecnologias(){
        return $this->hasMany('App\tecnologias',  'profissionais_has_tecnologias', 
        'tecnologia_id', 'profissional_id');
    }
}
