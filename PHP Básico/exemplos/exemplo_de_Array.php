<html>
	<head>
		<title>Pagina Exemplo em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php

		$nome_vendedor[0]="Paulo";
		$nome_vendedor[1]="Valmir";
		$nome_vendedor[2]="Cristina";
		$valor_venda[0]= 45200;
		$valor_venda[1]= 125000;
		$valor_venda[2]= 75000;
		for($i=0;$i<3;$i++){
		echo $nome_vendedor[$i]. "-" . $valor_venda[$i];
		echo "<br/>";
		
		}
		
		
		?>
			
	</body>
</html>