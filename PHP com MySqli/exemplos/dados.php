<html>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "vertrigo";
	$dbname = "bd_acervo";
	//criando conexao
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	//Checando conexão
	if(mysqli_connect_error()){
	die("Erro na Conexão: ".mysqli_connect_error());
	}
	echo "Conexão realizada com sucesso.";
	$sql3 = "INSERT INTO tb_acervo (titulo, autor)VALUES ('PHP5.2 com MySQL5.0 - Comércio Eletrônico','Carlos A. J. Oliviero')";
    if($conn->query($sql3)===TRUE){
		echo "<br><br>REGISTRO INSERIDO COM SUCESSO";
	}
	else{
		echo "<br><br>ERRO INSERINDO REGISTRO ".$conn->error;
	}
	
	$sql4 = "INSERT INTO tb_acervo (titulo, autor)VALUES ('Linguagens WEB','Alexandre Pereira')";
    if($conn->query($sql4)===TRUE){
		echo "<br><br>REGISTRO INSERIDO COM SUCESSO";
	}
	else{
		echo "<br><br>ERRO INSERINDO REGISTRO".$conn->error;
	}
	$conn->close();
	?>

	
</html>