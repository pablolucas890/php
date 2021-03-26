<?php
$servername="localhost";
$username = "novousuario";
$password = "password";
$dname="locacao";
$conn = new mysqli($servername, $username, $password, $dname);
if(mysqli_connect_error()){
	die("Erooo na conexão: ".$conn->connect_error);
	
	
}
$login = $_POST["login"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
$result = $conn->query($sql);
if($result-> num_rows > 0){
	$row = $result->fetch_assoc();
	if($row["tipo"] == "admin"){
	header("Location: admin.php");	
	}else{
		header("Location: normal.php");
		
    }
	
	
	
}else{
	echo "<meta http-equiv='refresh' content='3;index.php'>";
	echo "<H1>LOGIN INCORRETO, PAGINA SENDO ATUALIZADA EM 3 SEGUNDOS...</H1>";
}
$conn->close();
?>