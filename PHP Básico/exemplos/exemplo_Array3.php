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

$nome_prato[0] = "Lasanha e quatro queijos";
$nome_prato[1] = "Frango ao molho madeira";
$nome_prato[2] = "Arroz à graga";
$nome_prato[3] = "Feijoada à moda da casa";
$nome_prato[4] = "Nhoque Paulista";
$nome_prato[5] = "Bacalhau ao forno";
$nome_prato[6] = "feijão branco";

$preco_prato[0] = "$12,20";
$preco_prato[1] = "$10,00";
$preco_prato[2] = "$9,40";
$preco_prato[3] = "$11,20";
$preco_prato[4] = "$8,50";
$preco_prato[5] = "$15,20";
$preco_prato[6] = "$10,00";

echo $dia_semana[$hoje]." - ".$nome_prato[$hoje]." - ".$preco_prato[$hoje];

		?>
			
	</body>
</html>