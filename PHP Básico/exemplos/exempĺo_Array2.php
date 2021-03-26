<html>
	<head>
		<title>Pagina Exemplo em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			 $numeros[0] = 5;
			 $numeros[1] = 2;
			 $numeros[2] = 3;
			 $numeros[3] = 4;
			 $numeros[4] = 8;
			 $numeros[5] = 2;
			 $numeros[6] = 1;
			 $numeros[7] = 9;
			 $soma = 0;
			 for ($i = 0; $i < 8; $i++){
             $soma += $numeros[$i];
							 
	         }
			 echo $soma."<br>";
			 
		?>
			
	</body>
</html>