<html>
	<head>
		<title>Pagina Exemplo em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
$hoje = date ("w");
$dia_semana[0] = "Domingo";
$dia_semana[1] = "Segunda";
$dia_semana[2] = "Terça";
$dia_semana[3] = "Quarta";
$dia_semana[4] = "Quinta";
$dia_semana[5] = "Sexta";
$dia_semana[6] = "Sábado";

$filme[0] = "Guerra dos Mundos";
$filme[1] = "Hotel Ruanda";
$filme[2] = "O Quarteto Fantastico";
$filme[3] = "A Fantastica Fabrica de Chocolate";
$filme[4] = "A ilha";
$filme[5] = "A sogra";
$filme[6] = "Golpe baixo";

$diretor[0] = "Steven Spielberg";
$diretor[1] = "Terry George";
$diretor[2] = "Tim Story";
$diretor[3] = "Tim Burton";
$diretor[4] = "Michael Bay";
$diretor[5] = "Robert Luketic";
$diretor[6] = "	Peter Segal";

echo $dia_semana[$hoje]." - ".$filme[$hoje]." - ".$diretor[$hoje];

		?>
			
	</body>
</html>