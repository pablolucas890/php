<html>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname = "bd_acervo";
	//criando conexao
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	//Checando conexão
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".mysqli_connect_error());
	}
	echo "Conexão realizada com sucesso.";
	//criando o DB
	$sql1 = "CREATE DATABASE bd_acervo";
	if($conn->query($sql1)===true){
		echo "<br><br>Banco de dados bd_acervo criado.<br><br>";
		
	}
	else{
		echo "<br><br>Erro criando o banco de dados.".$conn->error;
	}
	$sql2 = "CREATE TABLE tb_acervo(id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(100),autor VARCHAR(100))";
    if($conn->query($sql2)===TRUE){
		echo "<br><br>Tabela tb_acervo criada com sucesso";
	}
	else{
		echo "<br><br>Erro Criando a tabela".$conn->error;
	}
	$conn->close();
	?>

	
</html>