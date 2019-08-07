<?php
/*
*
* Encontrar la solución que posibilite imprimir la variable $cad sin que ésta pierda 
* su contenido inicial.
*
*/

function agregar_algo($cadena)
{
    return $cadena .= ', y algo mas.';
}

$cad = 'Esto es una cadena';
$cad = agregar_algo($cad);
echo $cad.PHP_EOL;

exit();
