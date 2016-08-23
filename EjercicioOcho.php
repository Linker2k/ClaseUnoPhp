<html>
<head>
	<title>Ejercicio Ocho - Mauro Aquino</title>
</head>
<body>

<?php

/*Imprima los valores del vector asociativo siguiente usando la estructura de control foreach: 
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo'; */

$v = array( 1 => 90, 30 => 7, 'e' => 99, 'hola'=> 'mundo');


var_dump($v);

echo "<br>";

foreach ($v as $variable => $key){
 
	echo "$variable $key <br>";

}





?>

</body>
</html>

