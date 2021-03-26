   <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$login = $_POST["login"];
$senha = $_POST["senha"];
			if( $login == "" || $senha == ""){
				echo "Preencha todos os campos";
				
			}else{
if($login == "aluno" && $senha == "ifsuldeminas"){
	echo "logado com sucesso";
}
else{
		echo "erro ao logar";
}
			}			
			
?>
</form>
</body>
</html>