<html>
    <head>
	<meta charset="utf-8">
	    <title>Teste - Dados</title>
	</head>
    <body>
	<?php
	    $severname ="localhost";
		$username = "novousuario";
		$password = "password";
		$dbname = "3e2";
		
		$conn = new mysqli($severname,$username,$passaword,$dbname);
		if(mysqli_connect_error()){
			die("Erro na conexão:".mysqli_connect_error());
		}
		
		$id = $_POST["nomeCarro"];
	    
        $sql = "SELECT * FROM carros WHERE id = '$id'";
        $result=$conn->query($sql);	
        if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "Carro:".$row["nomeCarro"]."</br>";
				echo "Situação:".$row["situacao"]."</br>";
			}
		}else{
			echo"Sem registros";
        }			
	    
	?>	
	
	</body>
</html>    	