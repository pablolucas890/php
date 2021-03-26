   <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$cpf = $_POST["cpf"];
if($cpf == ""){
	echo "preencha o cpf";
}
else{
echo "cpf formatado: ". formatacpf($cpf);
}
?>
</form>
</body>
</html>
<?php
function formatacpf($cpfnovo){
$cpfnovo = substr($cpfnovo,0,3). "." .substr($cpfnovo,3,3). "." .substr($cpfnovo,6,3)."-".substr($cpfnovo,9,11);
return $cpfnovo;
}
?>