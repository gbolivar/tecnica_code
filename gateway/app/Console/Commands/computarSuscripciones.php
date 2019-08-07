<?php

namespace App\Console\Commands;

use App\Suscripcion;

use Illuminate\Console\Command;

class computarSuscripciones extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:computar {fecha}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encargado de sacar la estadistica de las suscripciones.';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        $fecha = $this->argument('fecha');
        $nuevos = Suscripcion::getNuevos($fecha);
        $canceladas = Suscripcion::getCanceladas($fecha);
        $todos = Suscripcion::getTotales();
        $optios = [
            'fecha' => $fecha,
            'hoy' => [
                'nuevos' => $nuevos,
                'cancelados' => $canceladas,
            ],
            'totales' => $todos
        ];
        print_r($optios);
        echo('End command.').PHP_EOL;
    }

}
