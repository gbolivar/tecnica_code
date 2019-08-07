<?php
/*
*
* Instanciar clase y metodo para imprimir '{Nombre de clase padre} - Hola mundo!'
*
*/

class ClaseExtendida
{
    public function hola()
    {
        return 'Hola mundo!';
    }
}

class D extends ClaseExtendida
{
    public function f(ClaseExtendida $c)
    {
        return get_class($c);
    }

    public static function imp()
    {
        return 'imprimir';
    }

    public static function getPadre()
    {
        $stace = class_parents(__CLASS__);
        $value = self::f(new $stace['ClaseExtendida']);
        return $value;
    }

    public static function getHola()
    {
        return parent::hola();
    }
}

class E extends D
{
    protected $msj;
    public function __construct()
    {
        $this->msj = parent::imp();
        $this->msj .= ' {'. parent::getPadre() .' }';
        $this->msj .= ' - ' . parent::getHola();
    }
    public function getMsj()
    {
        return $this->msj;
    }
}

$v = new E();
echo $v->getMsj().PHP_EOL;
exit();