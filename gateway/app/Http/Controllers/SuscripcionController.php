<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripcion;
use App\Servicio;
use App\Cliente;

class SuscripcionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creamos las reglas de validación
        $rules = [
            'servicio'      => 'required',
            'cliente'     => 'required',
            'fecha'  => 'required|date'
        ];

        // Ejecutamos el validador, en caso de que falle devolvemos la respuesta
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return [
                'created' => false,
                'errors'  => $validator->errors()->all()
            ];
        }
        $servicio_id = $request->input('servicio');
        $cliente_id = $request->input('cliente');
        $fecha = $request->input('fecha');

        try {
            $serv = Servicio::where('token', $servicio_id)->first();
            if(is_null($serv))
                throw new \Exception("Error Processing Request", 1);

            $clie = Cliente::where('codigo', $cliente_id)->first();
            if(is_null($serv))
                throw new \Exception("Error Processing Request", 1);

            $options = [
                'servicio_id' => $serv->id,
                'cliente_id' => $clie->id,
                'fecha' => $fecha,
            ];

            Suscripcion::create($options);
                
            return \Response::json(['created' => true], 200);
        } catch (\Exception $e) {
            \Log::info('Error creating suscripcion: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suscripcion  $suscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // Creamos las reglas de validación
        $rules = [
            'servicio'      => 'required',
            'cliente'     => 'required',
            'fecha'  => 'required|date'
        ];

        // Ejecutamos el validador, en caso de que falle devolvemos la respuesta
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return [
                'created' => false,
                'errors'  => $validator->errors()->all()
            ];
        }
        $servicio_id = $request->input('servicio');
        $cliente_id = $request->input('cliente');
        $fecha = $request->input('fecha');

        try {
            $serv = Servicio::where('token', $servicio_id)->first();
            if(is_null($serv))
                throw new \Exception("Error Processing Request", 1);

            $clie = Cliente::where('codigo', $cliente_id)->first();
            if(is_null($serv))
                throw new \Exception("Error Processing Request", 1);

            $options = [
                'servicio_id' => $serv->id,
                'cliente_id' => $clie->id,
                'fecha' => $fecha,
            ];

            Suscripcion::cancelar($options);

  
            return \Response::json(['cencelar' => true], 200);
        } catch (\Exception $e) {
            \Log::info('Error creating suscripcion: '.$e);
            return \Response::json(['cencelar' => false], 500);
        }
    }


}
