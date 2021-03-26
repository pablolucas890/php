<html>
<head>
<title>
exercicio 1
</title>
<body>





<?php 
$cpf = "11122233344";
$cpf_formatado = substr($cpf,0,3). "." .substr($cpf,3,3). "." .substr($cpf,6,3)."-".substr($cpf,9,11);
echo $cpf_formatado;

?>






</head>
</html>