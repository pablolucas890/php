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
echo $dia_semana[$hoje];

		?>
			
	</body>
</html>