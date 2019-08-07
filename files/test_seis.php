<?php
/*
* 
* Dado:
*
*/

interface poderVolar
{
    const CONSTANTE = 'Soy una constante de interface';
    public function volar();
    public function cantar();

}

interface poderNadar
{
    public function nadar();
}

class Pajaro
{
    public $infomacion;

    public function info(): string
    {
        $this->infomacion = "Yo soy {$this->nombre}, soy un Pajaro ";
        return $this->infomacion;
    }
}

/**implementado**/
class Paloma extends Pajaro implements poderVolar
{
    var $nombre = true;

    public function __construct($_nom = 'nn')
    {
        $this->nombre = 'Paloma ' . $_nom;
    }

    public function volar() : string
    {
        return ' y puedo volar';
    }

    public function cantar() : string
    {
        return ' y también puedo cantar';
    }
}


function describe($animal)
{
    $_data = '';

    if($animal instanceof Pajaro){

       $_data .= $animal->info();

       if($animal instanceof poderVolar){
        $_data .= $animal->volar();
        $_data .= $animal->cantar();
    }

    if($animal instanceof poderNadar){
       $_data .= $animal->nadar();
   }

} else $_data .= "No es un pajaro. Imposible describir.";

return $_data;
}

echo describe(new Paloma('Orlando')).PHP_EOL;

/*
*
* Devuelve 'Yo soy Paloma Orlando, soy un Pajaro y puedo volar'
*
*
* Ampliar la respuesta a ' y también puedo cantar'.
* Y que esta ampliación provenga de la definición de otro método y
* que se aplique utilizando una interface fluida en la clase del animal referido
*
*/










