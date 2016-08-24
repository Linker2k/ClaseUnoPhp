<html>
<head>
	<title>Ejercicio 15 - Mauro Aquino - Indice</title>
</head>
<body>

<?php

require('Rectangulo.php');

$FG = new Rectangulo();

$FG->SetColor('amarillo');

var_dump($FG);

$color =  $FG->GetColor();

echo "$color";

?>

</body>
</html>