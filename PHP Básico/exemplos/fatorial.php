<html>
	<head>
		<title>Exercicio</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			$fatorial = 3;
			$resultado_fatorial = 1;
			for($x = $fatorial; $x > 1; $x--){
				$resultado_fatorial *= $fatorial;
				$fatorial--;
			}
			echo $resultado_fatorial;
		?>
			
	</body>
</html>