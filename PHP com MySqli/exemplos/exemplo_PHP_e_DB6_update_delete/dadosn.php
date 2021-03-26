<html>
    <head>
	<meta charset="utf-8">
	    <title>Teste - Dados</title>
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
	
	</body>
</html>    	