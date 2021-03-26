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
	$username = "root";
	$password = "vertrigo";
	$dbname =  "3e2";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error()){
		echo "Erro na conexao";
	}
	$id = $_POST["id"];
	$sql = "UPDATE livros SET alugado='sim' WHERE id=$id";
	if($conn->query($sql) === TRUE){
		echo "Livro Alugado.";
	}else{
		echo "Livro não Alugado.";
	}
	?>
 </body>
 </html>