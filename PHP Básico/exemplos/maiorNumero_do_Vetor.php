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
			 $numeros[6] = -9;
			 $numeros[7] = 9;
             $maior = 0;
			 $menor = 0;
			for ($i = 0; $i < 7; $i++){
	         if($numeros[$i]>$maior){
				 $maior = $numeros[$i];
			 }
			 
			 

			 if($i == 0){
			 $menor = $numeros[$i];
			 }
			 else {
				 if($numeros[$i]<$menor){
					 $menor = $numeros[$i];
				 }
			 }
			 }
	        
			echo "Maior numero : ".$maior." <br> Menor numero : ".$menor;
			 
		?>
			
	</body>
</html>