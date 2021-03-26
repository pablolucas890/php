<html>
<head>
    <link rel="icon" href="./img/1.png">
  <link rel="icon" href="./img/1.png">
<meta charset="utf-8">
<title>aluCAR - Aluguel de carros</title>
</head>
<body>
	<div id="top">
	
	
	<a href="index.php" id ="l"><img src="./img/casa.png"></a>
	</div>
<div id="centro">


<h1> PEDIDO ENCAMINHADO </h1>

<?php
$servername="localhost";
$username = "novousuario";
$password = "password";
$dname="locacao";
$conn = new mysqli($servername, $username, $password, $dname);
if(mysqli_connect_error()){
	die("Erooo na conexão: ".$conn->connect_error);
	
	
}
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cpf = $_POST["cpf"];
$telefone = $_POST["tel"];
$email = $_POST["email"];
$sql = "insert into cadastro(nome, endereco, cpf, telefone,email,situacao)values ('$nome','$endereco','$cpf','$telefone','$email','nao')";
if($conn->query($sql) === TRUE){
	$nomeCompleto = $nome;
	list($nomenovo) = explode(' ', $nomeCompleto, 2);
	echo "<br> <br><p>AGUARDE A APROVAÇÃO, ASSIM QUE APROVADO VOCÊ LOGARÁ COM:</p><br><br><div id='user'>USER: <b>$nomenovo </b> <br><br>SENHA: <b>$nomenovo"."123</b></div>";
	}else{
	echo "<meta http-equiv='refresh' content='3;cadastro.php'>";
	echo "<font color='red'><CENTER><H1>ERRO AO CADASTRSR, PAGINA SENDO ATUALIZADA EM 3 SEGUNDOS...</H1></CENTER></FONT>";
    }
$conn->close();
?>
</div>
</body>
</html>
<style>
a{
	text-decoration:none;
}
#user{
text-align:center;
font-family:Arial Black;
font-size:20px;	
}
#user:hover{
		font-size:30px;
		transition-duration:0.5s;
}
b{
	color:#FF6800;
}
 body{
	 background:url("./img/back.png");
	 background-size:cover;
	 		font-family:Arial Black,Consolas,mv boli, comic sans ms;
		font-size:16px;
		align:center;
		
		
 }
 p{
	 text-decoration:underline;
 }
#centro{
	text-align:Justify;
	 		margin-left:37%;
	margin-right:37%;
	border:2px solid Black;
	padding:30px;
	background-color:#A7A5A8;
	height:450px;

}

	h1{
	text-shadow:3px 5px 8px Gray;
	margin-botton:10px;
	text-align:center;


	}#botao
{

	border:2px solid black;
	color:black;
	width:60%;
	padding:5px;
	background:white;
	font-family:Arial Black,Consolas,mv boli, comic sans ms;
	font-size:16px;
	
}
#botao:hover{
	background:#40403F;
		transition-duration:0.3s;
		color:white;
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