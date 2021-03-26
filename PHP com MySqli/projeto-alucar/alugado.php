  <html>
 <HEAD>
 <meta charset="utf-8"/>
 <title>
Teste
 </title>
 </HEAD>
 <body>
	<?php
	$servername = "localhost";
	$username = "novousuario";
	$password = "password";
	$dbname =  "locacao";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error()){
		echo "Erro na conexao";
	}
	$id = $_POST["id"];
	$sql = "UPDATE solicitacao SET situacao='sim' WHERE id=$id";
	if($conn->query($sql) === TRUE){
	echo "<meta http-equiv='refresh' content='0;alugar.php'>";
	}else{
	echo "<meta http-equiv='refresh' content='0;alugar.php'>";
    }
	?>
 </body>
 </html>