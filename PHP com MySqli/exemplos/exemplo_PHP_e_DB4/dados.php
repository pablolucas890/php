<?php
 
		$servername ="localhost";
		$username ="root";
		$password ="vertrigo";
$dbname = "3e2";
$conn= new mysqli($servername, $username, $password, $dbname);
if(mysqli_connect_error()){
	die("Erro na conexao");

}
$id =$_POST["id"];
$sql="DELETE  FROM clientes WHERE id=$id";
if($conn->query($sql) === TRUE){
	echo "Registro deletado ccom sucesso";
}
else{
	echo"Não foi possivel deletar o registro";
}

?>
