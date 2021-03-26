<html>
	<head>
		<title>
		Página Exemplo - PHP
		</title>
	</head>
	<body>
	<?php
    echo "A palavra 'pão' formatada é = ". formatar("pão");
	echo "<br/>";
	echo "A palavra 'chalé' formatada é = ". formatar("chalé");
	echo "<br/>";
	?>
	</body>
</html>
<?php
function formatar($string)
{
 $string = str_replace("á", "a", $string);	
 $string = str_replace("ã", "a", $string);
 $string = str_replace("é", "e", $string);
 $string = str_replace("í", "i", $string);
 $string = str_replace("ó", "o", $string);
 $string = str_replace("õ", "o", $string);
 $string = str_replace("ú", "u", $string);
 return $string;
}
?>