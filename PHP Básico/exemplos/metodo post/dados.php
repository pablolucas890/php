 <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$media = ($nota1+$nota2+$nota3)/3;
if($nome == "" || $nota1 == "" || $nota2 == "" || $nota3 == ""){
	echo "Preencha todos os campos";
}
else{
if($media>=5){
	echo "O aluno $nome foi aprovado<br/>";
}
else{
	echo "O aluno $nome foi reprovado<br/>";

}
}



?>
</form>
</body>
</html>