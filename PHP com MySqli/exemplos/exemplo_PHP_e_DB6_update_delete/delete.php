<html>
    <head>
	<meta charset="utf-8">
	    <title>Teste</title>
	</head>
    <body>
	

	<?php
	    $severname ="localhost";
		$username = "root";
		$passaword = "vertrigo";
		$dbname = "3e2";
		
		$conn = new mysqli($severname,$username,$passaword,$dbname);
		
		if(mysqli_connect_error()){
			die("Erro na conexão:".mysqli_connect_error());
		}
		
		$id = $_POST["id"];
        $sql = "DELETE FROM livros WHERE  id=$id";
		if($conn->query($sql) === TRUE){
			echo "Registro deletado com sucesso";
		}else{
			echo"Não foi possivel deletar o registro";
			
		}
		
		
		
			
        
	?>
	
	</body>
</html>