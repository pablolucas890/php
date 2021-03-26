<?php
 
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname = "livros";
	$titulo = $_POST["titulo"];
	$autor = $_POST["autor"];
	$ano = $_POST["ano"];
	$conn = new mysqli($servername,$username,$password,$dbname);
	
		$conn = new mysqli($servername,$username,$password,$dbname);
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".$conn->connect_error);
	}
	
	$sql = "INSERT INTO livros (titulo, autor, ano)VALUES ('$titulo','$autor','$ano')";
	    if($conn->query($sql)===TRUE){
		echo "REGISTRO INSERIDO COM SUCESSO";
	}
	else{
		echo "ERRO INSERINDO REGISTRO".$conn->error;
	}
	$conn->close();
	
?>