   <html>
 <HEAD>
    <link rel="icon" href="./img/1.png">
 <meta charset="utf-8"/>
 <title>
aluCAR - Aluguel de carros
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
	$sql = "UPDATE cadastro SET situacao='sim' WHERE id=$id";
	if($conn->query($sql) === TRUE){
		echo "Usuario Gerado";
	}else{
		echo "Erro ao gerar usuario.";
	}
	//.............................
$sql2 = "SELECT nome,email FROM cadastro WHERE id=$id";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
$user = $row["nome"];
list($nome) = explode(' ', $user, 2);
$senha = $nome."123";
	echo "<meta http-equiv='refresh' content='0;cadastroPendente.php'>";
    }
} else {
	echo "<meta http-equiv='refresh' content='0;cadastroPendente.php'>";
}
	$sql3 = "insert into usuarios(login, senha, tipo)values ('$nome','$senha','normal')";
    if($conn->query($sql3) === TRUE){
	echo "<meta http-equiv='refresh' content='0;cadastroPendente.php'>";
	}else{
	echo "<meta http-equiv='refresh' content='0;cadastroPendente.php'>";
    }



	?>
 </body>
 </html>
 