<?php

require_once('FiguraGeometrica.php');


class Triangulo extends FiguraGeometrica{

	private $_base;
	private $_altura;

	function __construct($ladoAlto, $ladoAncho){

		$this->_altura = $ladoAlto;
		$this->_base = $ladoAncho;
	}


	private function CalcularDatos(){

		$this->_perimetro = $this->_base + $this->_altura + sqrt(pow(2,$this->_base) + pow(2,$this->_altura));
	 	$this->_area = ($this->_base * $this->_altura)/2;
	}

	function toString(){

		$this->CalcularDatos();

		echo "<br>";
		echo "Datos del Triangulo:<br>";
		echo  "Base: ". $this->_base . " Altura: " . $this->_altura . " Perimetro:". $this->_perimetro . " Area:" . $this->_area;

		return;
	}

	function Dibujar(){

		$this->CalcularDatos();

		echo "<br>";

		for ($contador2 = 0 ; $contador2 < $this->_altura; $contador2++){

		for ($contador = 0;   $contador <= $contador2 ; $contador++){

			echo " * ";

		}


		echo "<br>";

	}
		return;
		
	}

}

?>
