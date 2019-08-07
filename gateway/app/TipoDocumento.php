<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    public function cliente()
    {
        return $this->hasMany('App\Cliente', 'tipo_documento_id');
    }
}
