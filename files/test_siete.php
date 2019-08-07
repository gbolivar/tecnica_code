<?php
/**
*
* Interfaces fluidas. 
* Escribir el método 'guardar()' para que $_respuesta imprima:
* 'Pedro Masculino 30 años, 75 kilos, 1,85'
*
*/
class persona
{
	private $_nombre;
	private $_sexo;
	private $_edad;
	private $_peso;
	private $_altura;

	public function nombre($_nombre)
	{	
		$this->_nombre = $_nombre;
		return $this;
	}

	public function sexo($sexo)
	{
		$this->_sexo = $sexo;
		return $this;
	}

	public function edad($edad)
	{
		$this->_edad = $edad . ' años, ';
		return $this;
	}

	public function peso($peso)
	{
		$this->_peso = $peso. ' kilos, ';;
		return $this;
	}

	public function altura($altura)
	{
		$this->_altura = $altura;
		return $this;
	}

	public function guardar()
	{}
}


$_persona = new persona();
$_respuesta = $_persona->nombre('Pedro')->sexo('Masculino')->edad('30')->peso('75')->altura('1,85')->guardar();
echo $_respuesta;
exit();