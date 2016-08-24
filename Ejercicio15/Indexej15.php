<html>
<head>
	<title>Ejercicio 15 - Mauro Aquino - Indice</title>
</head>
<body>

<?php

require('Rectangulo.php');
require('Triangulo.php');


//RECTANGULO

$Rec = new Rectangulo(12,13);

$Rec->SetColor('amarillo');

var_dump($Rec);

echo "<br>";

$Rec->toString();

echo "<br>";

$Rec->Dibujar();


//TRIANGULO

echo "<br>";

$Tri = new Triangulo(12,13);

$Tri->SetColor('amarillo');

var_dump($Tri);

echo "<br>";

$Tri->toString();

echo "<br>";

$Tri->Dibujar();


?>

</body>
</html>
