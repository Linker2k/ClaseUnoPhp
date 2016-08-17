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

		
		for ($vueltas; $vueltas < 10; $vueltas++) {
		
			$random = rand(1,10);

			echo "$random <br>";

		}


	?>

</body>
</html>
