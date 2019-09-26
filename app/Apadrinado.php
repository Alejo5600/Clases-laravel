<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apadrinado extends Model
{
    //
    public function padrino(){
        return $this->belongsTo('App\Padrino','id_padrino','id');
    }
}
