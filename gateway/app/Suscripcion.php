<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripcions';
 
    protected $fillable = [
        'servicio_id', 'cliente_id', 'fecha', 'estado', 'cancelada'
    ];

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->estado = self::STATUS_ACTIVE;
        parent::__construct($attributes);
    }

    public function cliente()
    {
        return $this->hasMany('App\Cliente', 'cliente_id');
    }

    public function servicios()
    {
        return $this->hasMany('App\Servicio', 'servicio_id');
    }

    public static function cancelar(array $values)
    {
        $value = Suscripcion::where('servicio_id', $values['servicio_id'])
                  ->where('cliente_id', $values['cliente_id'])
                  ->where('fecha', $values['fecha'])->first();
    
        if(is_null($value))
                throw new \Exception("Error Processing Request", 1);

        Suscripcion::where('id', $value->id)
        ->update(['cancelada' => self::STATUS_ACTIVE]);

        return true;
    }

    public static function getNuevos($fecha)
    {
        $value = Suscripcion::where('fecha', $fecha)->whereNull('cancelada')->get()->count();
        return $value;
    }

    public static function getCanceladas($fecha)
    {
        $value = Suscripcion::where('fecha', $fecha)->where('cancelada', 1)->get()->count();
        return $value;
    }

    public static function getTotales()
    {
        $value = Suscripcion::get()->count();
        return $value;
    }

}
