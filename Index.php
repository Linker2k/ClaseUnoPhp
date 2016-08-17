<html>
<head>
	<title>Aquino</title>
</head>
<body>
	<h1>
		Hola Mundo
	</h1>

	<?php

		
		$random = 0;
		$impar 	= 0;
		$par  	= 0;
		$vector = array(0,0,0,0,0,0,0,0,0,0);
		$vueltas = 0;
		$muestra = 0;

		
		//Definir cantidad de vueltas

		for ($vueltas; $vueltas < 10000; $vueltas++) {
		
			$random = rand(1,10);

				
			//Verificar si es par o impar

			if ($random/2==0) {

				$par++;
			
			} else {

				$impar++;
			}

			//Acumular variables por numero

			switch ($random) {
			case 1: $vector[0]++;
			break;
			case 2: $vector[1]++;
			break;
			case 3: $vector[2]++;
			break;
			case 4: $vector[3]++;
			break;
			case 5: $vector[4]++;
			break;
			case 6: $vector[5]++;
			break;
			case 7: 
				if ($vector[6] >= (5*$vueltas) / 100) {
					continue;
				} else {
				
						$vector[6]++;
				}
			break;
			case 8: $vector[7]++;
			break;
			case 9: $vector[8]++;
			break;
			case 10: $vector[9]++;
			break;
			}

		}

		
		
		echo "Cantidad de uno:" . ($vector[0]*100) /$vueltas . "% <br>";
		echo "Cantidad de dos:" . ($vector[1]*100) /$vueltas . " % <br>";
		echo "Cantidad de tres:" . ($vector[2]*100) /$vueltas . " % <br>";
		echo "Cantidad de cuatro:" . ($vector[3]*100) /$vueltas . " % <br>";
		echo "Cantidad de cinco:" . ($vector[4]*100) /$vueltas . " % <br>";
		echo "Cantidad de seis:" . ($vector[5]*100) /$vueltas . " % <br>";
		echo "Cantidad de siete:" . ($vector[6]*100) /$vueltas . " % <br>";
		echo "Cantidad de ocho:" . ($vector[7]*100) /$vueltas . " % <br>";
		echo "Cantidad de nueve:" . ($vector[8]*100) /$vueltas . " % <br>";
		echo "Cantidad de diez:" . ($vector[9]*100) /$vueltas . " % <br>";

		

	?>

</body>
</html>
