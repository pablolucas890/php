<html>
	<head>
		<title>
		Pagina PHP
		</title>
	</head>
	<body>
	
	<?php
	$saida = "<table width='15%' border='1'>";
	for($x = 1; $x <= 15;$x++)
	{
	
		$saida = $saida. "<tr>";
		if($x %2 ==0)
		{
			$saida = $saida. "<td bgcolor='#C0C0FF'>Linha Par </td>";
			
		}
		else
		{
			$saida = $saida. "<td bgcolor='#FFFFF'>Linha Impar </td>";
		}
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
