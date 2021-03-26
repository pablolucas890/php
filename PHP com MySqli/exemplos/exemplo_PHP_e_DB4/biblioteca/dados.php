  <?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname = "livros";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
		$conn = new mysqli($servername,$username,$password,$dbname);
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".$conn->connect_error);
	}
	   
	$id = $_POST["titulo"];
	$sql = "SELECT * FROM livros WHERE id = '$id'";
	$result=$conn->query($sql);	
        if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "Autor:".$row["autor"]."</br>";
				echo "Ano:".$row["ano"]."</br>";
			}
		}else{
			echo"Sem registros";
        }			
		
	?>