  <html>
 <HEAD>
    <link rel="icon" href="./img/1.png">
 <meta charset="utf-8"/>
 <title>
aluCAR - Aluguel de carros
 </title>
 </HEAD>
 <body>
 	<div id="top">
	
	<a href="admin.php" id ="l"><img src="./img/casa.png"></a>
	</div>
	<form action="geraUsuario.php" method="post">
	<div id="centro">
	<center>
	<div id="title">
	<h1>
	<FONT SIZE ="50">APROVAR</FONT>
	</h1>
	</div><center>
		<div id= "d2">	

</div>

	<div id="d1">
		<center>
	<h1>REGISTROS
	</h1>
	</center>
<?php
	$servername = "localhost";
	$username = "novousuario";
	$password = "password";
	$dbname =  "locacao";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error()){
		echo "Erro na conexao";
	}
	$sql = "SELECT * FROM cadastro WHERE situacao='nao'";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "<br>";
			echo "NOME: ";
			echo "<b>";
			echo $row["nome"];
			echo "</b>";
			echo "<br>";
			echo "CPF: ";
			echo "<b>";
			echo $row["cpf"];
			echo "</b>";
			echo "<br>";
			echo "ENNDEREÇO: ";
			echo "<b>";
			echo $row["endereco"];
			echo "</b>";
			echo "<br>";
			echo "TELEFONE: ";
			echo "<b>";
			echo $row["telefone"];
			echo "</b>";
			echo "<br>";
			echo "E-MAIL: ";
			echo "<b>";
			echo $row["email"];
			echo "</b>";
			echo "<br>";
			$id = $row["id"];
			echo "<center>";
			echo "<button type='submit' name='id' value='$id'>";
			echo "<img src='./img/aprov.png'>";
			echo "</button>";
			echo "</center><br/>";
			echo "<div id='linha'></div>";
		}
	}
	else{
				echo "<center>";
		echo "<font color='red'>";
		echo "Não existe Registros";
		echo "</font>";
		echo "</center><br/>";
	}
	?>
	</div>
	
	</div>
	</form>
 </body>
 </html>
 
 <style>
 
#title{
	
    box-shadow:0px 0px 7px #666;
    border:1px solid #999;
    border-radius:10px;
	height:100px;
	margin-top:30px;
	margin-bottom:30px;
	background:#A7A5A8;
}
#linha{
	border-top:1px dotted Black;
	height:20px;
}
 button img{
	 width:100%;
	 height:100%;
	 
 }
 button:hover{
	 	transform:scale(1.1);
		
		transition-duration:0.3s;
	 filter: drop-shadow(0px 0px 10px black);
 }
 button{
	 width:60px;
	 height:50px;
	background-color:white;
	border:1px solid black;
	margin-top:5px;
 }
	#d2{
		margin-left:5%;
	background-color:#f6f6f6;
    box-shadow:0px 0px 7px #666;
    border:1px solid #999;
    border-radius:10px;
	height:500px;
	margin-top:20px;
	width:40%;
	float:left;
	text-align:center;
	color:black;
	font-family:Arial Black;
	
	}
	#d1{
		
		margin-right:5%;
	background-color:#f6f6f6;
    box-shadow:0px 0px 7px #666;
    border:1px solid #999;
    border-radius:10px;
	margin-top:20px;
	width:40%;
	float:right;
	margin-bottom:20px;
	text-align:justify;padding-left:10px;
	color:black; 
	font-family:Arial Black;
		overflow-y: scroll;
	height:500px;
	
	}	
 body{
	 background:#CAC8CC;
	 background-size:cover;
	 		font-family:Arial Black,Consolas,mv boli, comic sans ms;
		font-size:16px;
	background:#A7A5A8;
 }
#centro{
	box-shadow:0px 0px 7px black;
	text-align:center;
	margin-left:20%;
	margin-right:20%;
	padding:30px;
	height:700px;
	background:#CAC8CC;
}

	h1{
	text-shadow:3px 5px 8px Gray;
	margin-botton:10px;
	}
		b{
		color:#7F3700;
	}
	
	#l img{
	width:50px;;
	height:100%;
}
#l{
		float:right;
		height:50px;	
		padding-left:3px;
		padding-right:3px;
		padding-top:3px;
	}
	#l:hover{
		border-right:5px solid black;
		border-left:1px solid black;
	background:#5DC7FF;
		transition-duration:0.3s;
	}#top{
	background-color:#A7A5A8;
	position:fixed;
	z-index:9999;
	width:100%;
	height:53px;
	border:2px solid black;
	padding-right:50px;
	margin-left:-10px;
	margin-top:-10px;
	
}
</style>