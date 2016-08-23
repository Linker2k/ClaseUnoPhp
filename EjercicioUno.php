<<html>
<head>
	<title>Ejercicio Uno - Mauro Aquino</title>
</head>
<body>
<?php

$contador = 0;
$suma = 0;



	for ($bucle = 0; $bucle < 1000; $bucle++){

		$contador ++;

		$suma = $suma + $contador;

		if ($suma>=1000){

			$suma = $suma - $contador;
			$bucle = 1000;

		}

		echo "Numero sumado: $contador <br>";

	}

echo "El numero sumado es: $suma  Se sumaron en total: $contador numeros"


?>


</body>
</html>