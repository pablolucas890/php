<html>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname = "myDB3e2";

	//criando conexao
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	//Checando conexão
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".mysqli_connect_error());
	}
	echo "Conexão realizada com sucesso.<br><br>";
	//criando o DB
	$sql = "CREATE TABLE users(id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, login VARCHAR(30),password VARCHAR(100))";
    if($conn->query($sql)===TRUE){
		echo "Tabela users criada com suceso";
	}
	else{
		echo "Erro Crianda com sucesso".$conn->error;
	}
	$conn->close();
	?>

	
</html>