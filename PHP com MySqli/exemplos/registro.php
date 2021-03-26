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
	$sql = "INSERT INTO users (login, password)VALUES ('admin','123456')";
    if($conn->query($sql)===TRUE){
		echo "REGISTRO INSERIDO COM SUCESSO";
	}
	else{
		echo "ERRO INSERINDO REGISTRO".$conn->error;
	}
	$conn->close();
	?>

	
</html>