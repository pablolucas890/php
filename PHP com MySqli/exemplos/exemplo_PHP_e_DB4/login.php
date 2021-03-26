 <?php
	$servername = "localhost";
	$username = "usuairo";
	$password = "vertrigo";
	$dbname = "livros";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".$conn->connect_error);
	}
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	$sql = "SELECT * FROM user WHERE login='$login' AND senha='$senha'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
		if($row["tipo"] == "admin"){
			header("Location: admin.php");
		}
		else{
			header("Location: normal.php");
		}

	}
	else{
		echo "Login incorreto.";
	}
	
	$conn->close();
 ?>