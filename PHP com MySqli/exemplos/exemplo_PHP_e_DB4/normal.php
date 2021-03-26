 <html>
 <HEAD>
 <meta charset="utf-8"/>
 <title>
Login
 </title>
 </HEAD>
 <body>
 	<form method="post" action="dados.php">
 <select name="titulo">
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
	        $sql = "SELECT * FROM livros";
        $result=$conn->query($sql);	
        if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo"<option value='".$row["id"]."'>".$row["titulo"]."</option>";
			}
		}else{
			echo"Sem registros";
        }	
		echo"<br><input type ='submit' value='Enviar'>";
		
	?>
	</select>
 </body>
 </html>