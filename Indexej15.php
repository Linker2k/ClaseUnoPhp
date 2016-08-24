<html>
<head>
	<title>Ejercicio 15 - Mauro Aquino - Indice</title>
</head>
<body>

<?php

require('Rectangulo.php');

$FG = new Rectangulo(12,13);

$FG->SetColor('amarillo');

var_dump($FG);

$color =  $FG->toString();



?>

</body>
</html>