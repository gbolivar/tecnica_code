<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servi = new Servicio();
		$servi->token = 'SEL';
		$servi->nombre = 'Servicios de Limpieza';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SEA';
		$servi->nombre = 'Servicio de Aficionados';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SAS';
		$servi->nombre = 'Servicio de Aficionados Por Satélite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SES';
		$servi->nombre = 'Servicio Entre Satelites';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SOE';
		$servi->nombre = 'Servicio de Operaciones Espaciales';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SMP';
		$servi->nombre = 'Servicio Móvil Por Satelite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SMT';
		$servi->nombre = 'Servicio Movil Terrestre Por Satelite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SMM';
		$servi->nombre = 'Servicio Movil Maritimo Por Satelite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'OMM';
		$servi->nombre = 'Servicio de Operaciones Portuarias';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'OMB';
		$servi->nombre = 'Servicio de Movimiento de Barcos';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'OPS';
		$servi->nombre = 'Servicio Móvil Aeronáutico Por Satélite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'ORP';
		$servi->nombre = 'Servicio Móvil Aeronáutico (R) Por Satélite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'OAR';
		$servi->nombre = 'Servicio Móvil Aeronáutico (OR) Por Satélite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SRG';
		$servi->nombre = 'Servicio de Radiodifusión Por Satélite';
		$servi->save();

		$servi = new Servicio();
		$servi->token = 'SOT';
		$servi->nombre = 'Servicio Otros';
		$servi->save();


    }
}
