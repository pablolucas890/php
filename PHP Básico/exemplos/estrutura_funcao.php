<html>
	<head>
		<title>
		Página Exemplo - PHP
		</title>
	</head>
	<body>
	<?php
	echo "A soma de 4 e 5 = ".somar(4, 5);
	echo "<br/>";
	echo "A soma de 15 e 8 = ".somar(15, 8);
	echo "<br/>";
	echo "A soma de 20 e 13 = ".somar(20, 13);
	echo "<br/>";
	?>
	</body>
</html>
<?php
function somar($num1, $num2){
$soma = $num1 + $num2;
return $soma;
}
?>