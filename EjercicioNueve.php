<html>
<head>
	<title>Ejercicio Nueve - Mauro Aquino</title>
</head>
<body>

<?php

$lapicera = array('Color'=>'azul','Marca'=>'bic','Trazo'=>'fino','Precio'=>10.5);


echo "Lapicera Uno: ";

foreach($lapicera as $caracteristica => $valor){

	echo "- $caracteristica : $valor  , ";
}

echo "<br>";

$lapicerados = array('Color' => 'rojo', 'Marca' => 'Fiber Castel', 'Trazo' => 'Grueso', 'Precio' => 12);

echo "Lapicera Dos: ";

foreach($lapicerados as $caracteristica => $valor)
{

	echo " - $caracteristica : $valor  , ";
}

echo "<br>";


echo "Lapicera Tres: ";

$lapiceratres = array('Color' => 'negro', 'Marca' => 'Sharpie', 'Trazo' => 'Microfibra', 'Precio' => 22);

foreach($lapiceratres as $caracteristica => $valor)
{

	echo "- $caracteristica : $valor  , ";
}


?>


</body>
</html>