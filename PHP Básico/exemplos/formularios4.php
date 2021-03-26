<html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="cadastro.php">
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];

if($nome != ""){
	echo "Nome:$nome<br/>";
	
}
else{
echo "o nome está vazio<br>";
}

if($email != ""){
	echo "Email:$email<br/>";
	
}
else{
echo "o email está vazio<br>";
}



?>
</form>
</body>
</html>