<html>
	<head>
		<title>
		Pagina PHP
		</title>
	</head>
	<body>
	
	<?php
	$saida = "<table width='100%' border='1'>";
	for($x = 1; $x <= 15;$x++)
	{
	
		$saida = $saida. "<tr>";
		$saida = $saida. "<td>&nbsp;</td>";
		$saida = $saida. "</tr>";
	}
	$saida = $saida. "</table>";
	?>
	<h2>
	Impressão de uma tabela com uma coluna e 15 linhas
	</h2>
	<?php echo $saida;?>
	</body>
</html>
