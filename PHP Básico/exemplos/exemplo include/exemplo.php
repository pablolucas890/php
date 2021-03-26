<html>
	<head>
		<title>
		Página Exemplo - PHP
		</title>
	</he ad>
	<body>
	<?php
	include("minhas_funcoes.php");
    echo "A palavra 'pão' formatada é = ". formatar("pão");
	echo "<br/>";
	echo "A palavra 'o pé do josias' formatada é = ". formatar("o pé do josias");
	echo "<br/>";
		echo "A soma de 4 e 5 = ".somar(4, 5);
	echo "<br/>";
	echo "A soma de 15 e 8 = ".somar(15, 8);
	echo "<br/>";
	?>
	</body>
</html>
