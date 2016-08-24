<html>
<head>
	<title>Ejercicio Diez - Mauro Aquino</title>
</head>
<body>

<?php

/*Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que 
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los 
Arrays de Arrays.*/

$lapicera = array('Color'=>'azul','Marca'=>'bic','Trazo'=>'fino','Precio'=>10.5);
$lapicerados = array('Color' => 'rojo', 'Marca' => 'Fiber Castel', 'Trazo' => 'Grueso', 'Precio' => 12);
$lapiceratres = array('Color' => 'negro', 'Marca' => 'Sharpie', 'Trazo' => 'Microfibra', 'Precio' => 22);

$matriz = array($lapicera,$lapicerados,$lapiceratres);

//var_dump($matriz);

//PRIMERO METODO DE LECTURA: FOREACH ANIDADO PRIMERO DESCARGA EL ARRAY DE UNA MATRIZ EN UN ARRAY  Y LUEGO SE MUESTRA EL FOREACH COMUN

foreach ($matriz as $caracteristica){

	foreach ($caracteristica as $caractdos => $valor){

		echo "$caractdos - $valor ";


	}

echo "<br>";
echo " <br>";

//SEGUNDO METODO DE LECTURA: FOREACH ACCEDIDO POR ATRIBUTO

foreach ($matriz as $lapicera){

		echo $lapicera['Color'];


	}


	
}


?>

</body>
</html>