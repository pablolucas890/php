<html>
	<head>
		<title>
		Pagina PHP
		</title>
	</head>
	<body>
	<h2> Impressão de uma tabela com 1 coluna e 15 linhas.</h2>
	<table width="100%" border="1">
	<?php
	
	for($x = 1; $x <= 15;$x++)
	{
	
		echo "<tr>";
		echo "<td>&nbsp;</td>";
		echo"</tr>";
	}
	?>
	</table>
	</body>
</html>
