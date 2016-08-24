<?php

require('ClasePadre.php');


class Rectangulo extends FiguraGeometrica{

	private $_ladoUno;
	private $_ladoDos;

	function __construct($ladouno, $ladodos){

		$this->_ladoUno = $ladouno;
		$this->_ladoDos = $ladodos;
	}


	private function CalcularDatos(){

		$this->_perimetro = 2*$this->_ladoUno + 2*$this->_ladoDos;
	 	$this->_area = $this->_ladoUno * $this->_ladoDos;
	}

	function toString(){

		$this->CalcularDatos();

		$string =  "Perimetro:". $this->_perimetro . "Area:" . $this->_area;

		return $string;
	}

	function Dibujar(){

		return ;
	}

}

?>