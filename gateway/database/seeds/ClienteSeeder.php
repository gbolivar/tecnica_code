<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$dni = DB::table('tipo_documentos')->select('id')->where('nombre', 'DNI')->get()[0]->id;
    	$client = new Cliente();
        $client->tipo_documento_id = $dni;
        $client->documento = '95773233';
        $client->codigo = 'N05';
        $client->nombre = 'Pablo Perez';
        $client->email = 'pablocorreo@gmail.com';
        $client->telefono = '04120000000';
        $client->save();



    	$cuil = DB::table('tipo_documentos')->select('id')->where('nombre', 'cuit')->get()[0]->id;
    	$client = new Cliente();
        $client->tipo_documento_id = $cuil;
        $client->documento = '20957732334';
        $client->codigo = 'N06';
        $client->nombre = 'Alberto Blanco';
        $client->email = 'albertocorreo@gmail.com';
        $client->telefono = '04120000010';
        $client->save();


    	$cuit = DB::table('tipo_documentos')->select('id')->where('nombre', 'CUIT')->get()[0]->id;
        $client = new Cliente();
        $client->tipo_documento_id = $cuit;
        $client->documento = '30237732335';
        $client->codigo = 'N07';
        $client->nombre = 'IronSofts';
        $client->email = 'correo@ironsofts.com';
        $client->telefono = '04120000020';
        $client->save();
    }
}
