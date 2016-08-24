<?php

require_once('FiguraGeometrica.php');


class Rectangulo extends FiguraGeometrica{

	private $_ladoAlto;
	private $_ladoAncho;

	function __construct($ladoAlto, $ladoAncho){

		$this->_ladoAlto = $ladoAlto;
		$this->_ladoAncho = $ladoAncho;
	}


	private function CalcularDatos(){

		$this->_perimetro = 2*$this->_ladoAlto + 2*$this->_ladoAncho;
	 	$this->_area = $this->_ladoAlto * $this->_ladoAncho;
	}

	function toString(){

		$this->CalcularDatos();

		echo "<br>";
		echo "Datos del Rectangulo:<br>";
		echo  "Alto: ". $this->_ladoAlto . " Ancho: " . $this->_ladoAncho . " Perimetro:". $this->_perimetro . " Area:" . $this->_area;

		return;
	}

	function Dibujar(){

		$this->CalcularDatos();

		echo "<br>";

		for ($contador2 = 0 ; $contador2 < $this->_ladoAlto; $contador2++){

		for ($contador = 0; $contador < $this->_ladoAncho ; $contador++){

			echo " * ";

		}


		echo "<br>";

	}
		return;
		
	}

}

?>