<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tecnologia;

class Profissional extends Model
{
    protected $table = 'profissionais';

    public function tecnologias(){
        return $this->belongsToMany('App\tecnologias',  'profissionais_has_tecnologias', 
        'profissional_id', 'tecnologia_id');
    }
}
