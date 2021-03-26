<html>
<head>
<title>
exercicio 1
</title>
<body>





<?php 

$hora = date("h:i:s");
$hora_virgula;

echo "Hora no formato normal: $hora<br/>";
$hora_virgula = strtr($hora,":",",");
echo "Hora com virgula: $hora_virgula<br/>";

?>






</head>
</html>