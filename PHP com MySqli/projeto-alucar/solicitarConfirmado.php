 <html>
    <head>
	    <title>aluCAR - Aluguel de carros </title>
	</head>
    <body>

	<?php 

		$servername ="localhost";
		$username = "novousuario";
		$password = "password";
$dbname = "locacao";
	$carro = $_POST["Carro"];
	$tempo = $_POST["tempo"];
	$data = $_POST["data"];
	$hora = $_POST["hora"];
$conn= new mysqli($servername, $username, $password, $dbname);
if(mysqli_connect_error()){
	die("Erro na conexao");

}
	$sql = "INSERT INTO solicitacao (nomeCarro,tempo,data,hora,situacao)VALUES ('$carro','$tempo','$data','$hora','nao')";
    if($conn->query($sql)===TRUE){
		echo "REGISTRO INSERIDO COM SUCESSO";
	}
	else{
		echo "ERRO INSERINDO REGISTRO".$conn->error;
	}
	?>
</body>
</html>

