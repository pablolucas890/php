 <html>
 <HEAD>
 <meta charset="utf-8"/>
 <title>
Teste
 </title>
 </HEAD>
 <body>
	<form action="update.php" method="post">
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname =  "3e2";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error()){
		echo "Erro na conexao";
	}
	$sql = "SELECT * FROM clientis WHERE online='nao'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo $row["nome"];
			echo " ";
			echo $row["sobrenome"];
			echo " - ";
			$id = $row["id"];
			echo "<button type='submit' name='id' value='$id'>";
			echo "online";
			echo "</button>";
			echo "<br>";
		}
	}
	else{
		echo "Não existe Registros";
	}
	?>
	</form>
 </body>
 </html>