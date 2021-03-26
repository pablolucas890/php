<html>
  <head>
	<meta charset="utf-8">
	    <title>Teste</title>
	</head>
    <body>
	<form method="post" action="delete.php";>

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
			echo $row["titulo"];
			echo " ";
			echo $row["autor"];
			echo "<button type='submit' name='id' value='".$row["id"]."'>";
			echo "Deletar";
			echo "</button>";
			echo "<br />";
			}
		}else{
			echo"Sem registros";
        }
		
	?>   	
<h3> VER LIVROS ALUGADOS </h3>
<a href="alugar.php">ALUGAR </a>
</body>
</html>
