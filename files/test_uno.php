<?php
/*
*
* A partir de las siguientes clases y sus interfaces, imrimir en pantalla
* 'Pollo pone huevos con cascara'
* 'Perro tiene crias danzarinas'
*
*/


declare(ticks=1);

interface Pajaro
{
    public function ponerHuevo() : Huevo;
}

interface Mamifero
{
    public function parir() : Cachorro;
}

class Pollo implements Pajaro
{
	public function ponerHuevo() : Huevo
	{
        $value = (string)__CLASS__;
		return new Huevo($value);
	}
}

class Perro implements Mamifero
{
    public function parir() : Cachorro
    {
        return new Cachorro(__CLASS__);
    }
}

class Huevo
{
	public $tipopajaro;
	public function __construct(string $tipopajaro)
    {
    	$this->tipopajaro = $tipopajaro . ' pone huevos ';
    }

    public function cascara()
    {
        echo $this->tipopajaro . 'con ' . __FUNCTION__;
    }

    public function fritos()
    {
        echo $this->tipopajaro . __FUNCTION__;
    }

    public function duros()
    {
        echo $this->tipopajaro . __FUNCTION__;
    }
}

class Cachorro
{
    public $tipomamifero;
    public function __construct(string $tipomamifero)
    {
        $this->tipomamifero = $tipomamifero . ' tiene crias ';
    }

    public function vivas()
    {
        echo $this->tipomamifero . __FUNCTION__;
    }

    public function danzarinas()
    {
        echo $this->tipomamifero . __FUNCTION__;
    }
}

# Solucion
$value = New Pollo();
echo $value->ponerHuevo()->cascara().PHP_EOL;

$value = New Perro();
echo $value->parir()->danzarinas().PHP_EOL;


