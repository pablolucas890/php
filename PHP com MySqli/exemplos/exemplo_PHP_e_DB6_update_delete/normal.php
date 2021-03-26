<html>
    <head>
	<meta charset="utf-8">
	    <title>Teste</title>
	</head>
    <body>
	<form method="post" action="dadosn.php";>
	<select name="titulo">
	<?php
	    $severname ="localhost";
		$username = "root";
		$passaword = "vertrigo";
		$dbname = "3e2";
		
		$conn = new mysqli($severname,$username,$passaword,$dbname);
		
		if(mysqli_connect_error()){
			die("Erro na conexão:".mysqli_connect_error());
		}
		
		
	    
        $sql = "SELECT * FROM livros";
        $result=$conn->query($sql);	
        if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo"<option value='".$row["id"]."'>".$row["titulo"]."</option>";
			}
		}else{
			echo"Sem registros";
        }			
	?>	
	<input type ="submit" value="Enviar">
	</select>
	</body>
</html>    	