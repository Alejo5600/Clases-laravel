<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apadrinado extends Model
{
    //
    public function padrino(){
        return $this->belongsTo('App\Padrino','id_padrino','id');
    }

    public function Acudientes(){
        return $this->belongsToMany('App\Acudientes','apadrinados_acudientes','id_apadrinado','id_acudiente');
    }

}
