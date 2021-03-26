<html>
    <head>
	    <title>Exercício </title>
	</head>
    <body>
	<?php 
	$login = $_POST["login"];
	$senha = $_POST["Senha"];
	if(($login == "ifsuldeminas" || $login == "ifsuldeminas2018" || $login == "tecinformatica" || $login == "tecinf2018")&&($senha == "admin" || $senha=="123456"))
	{
		echo "Login realizado com sucesso";
		

	}
	elseif(($login == "ifsuldeminas" || $login == "ifsuldeminas2018" || $login == "tecinformatica" || $login == "tecinf2018")&&(!($senha == "admin" || $senha=="123456"))){
		echo "Senha incorreta";
	}
	else{
		echo "Usuario não existe";
	}
	?>
	
</body>
</html>
   
	