<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padrino extends Model
{
    //

    public function apadrinados(){
        return $this->hasMany('App\Apadrinado','id_padrino');
    }

}
