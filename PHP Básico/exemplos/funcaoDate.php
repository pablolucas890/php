
<html>
	<head>
		<title>
		Pagina PHP
		</title>
	</head>
	<body>
	<?php
$dia = date ("l");
if( $dia=="Saturday" || $dia=="Sunday"){
	echo "dia de decansar";
}
else{
    echo "dia de Trabalhar";
}
	?>
	</body>
	
</html>