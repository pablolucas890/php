<html>
	<head>
		<title>Pagina Exemplo em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			 $numeros[0] = -5;
			 $numeros[1] = 2;
			 $numeros[2] = 3;
			 $numeros[3] = 4;
			 $numeros[4] = 8;
			 $numeros[5] = -2;
			 $numeros[6] = -1;
			 $numeros[7] = 9;
		
for ($i = 0; $i < sizeof($numeros); $i++){
	
	   if($numeros[$i] > 0){
		
		
		echo $numeros[$i]."<br>";
	}
	
	
}

		?>
			
	</body>
</html>