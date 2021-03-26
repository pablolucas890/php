<html>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname = "myDB3e2";

	//criando conexao
	$conn = new mysqli($servername,$username,$password);
	
	//Checando conexão
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".mysqli_connect_error());
	}
	echo "Conexão realizada com sucesso.<br><br>";
	//criando o DB
	$sql = "CREATE DATABASE myDB3e2";
	if($conn->query($sql)===true){
		echo "Banco de dados myDB3e2 criado.";
		
	}
	else{
		echo "Erro criado o banvo de dados.".$conn->error;
	}

	$conn->close();
	?>

	
</html>