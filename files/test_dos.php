<?php

/**
*
* La cantidad de números pasados al método 'sumar' son siempre aleatorios. 
* Encontrar el error
*
*/

class variable
{
	public $resultado;

	public function sumar(array $numeros) : int
	{
		return array_sum($numeros);
	}
}

$sumamos = new variable();
echo $sumamos->sumar([10,12,3,45,7,102]).PHP_EOL;
exit();