<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudientes extends Model
{
    //

    public function Apadrinados(){
        return $this->belongsToMany('App\Apadrinado','apadrinados_acudientes','id_acudiente','id_apadrinado');
    }

}
