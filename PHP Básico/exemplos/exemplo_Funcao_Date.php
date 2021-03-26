
<html>
	<head>
		<title>
		Pagina PHP
		</title>
	</head>
	<body>
	<?php
$hora = date ("H");
if($hora >= 11 && $hora <=13){
	echo "hora de almoço";
}
else if($hora>=18){
		echo "hora de descanso";
}
else {
		echo "hora de estudar";
}
?>
	</body>
	
</html>