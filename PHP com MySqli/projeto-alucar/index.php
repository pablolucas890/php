<html>
<head>
  <link rel="icon" href="./img/1.png">
<meta charset="utf-8">
<title>aluCAR - Aluguel de carros</title>
</head>
<body>

<div id="centro">
<center>
<h1> ENTRAR </h1>
</center>
<form method="post" action="login.php">
LOGIN:
<input type="text" name="login" id="campo">
<br/>
<br/>
SENHA: 
<input type="text" name="senha" id="campo">
<br />
<br/>
<center>
<input type="submit" value="ENVIAR"id="botao"/>
</form>

<form method="post" action="cadastro.php" >
<br/>
<input type="submit" value="CADASTRAR" id="botao">
</form>
</center>
</div>
</body>
</html>

<style>
#botao
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
 body{
	 background:url("./img/back.png");
	 background-size:cover;
	 		font-family:Arial Black,Consolas,mv boli, comic sans ms;
		font-size:16px;
 }
#centro{
	text-align:justify;
	 		margin-left:39%;
			
	margin-right:39%;
	margin-top:200px;
	border:2px solid Black;
	padding:30px;
	background-color:#A7A5A8;
}
#campo{
	float:right;
}
input{
	border-color:black;
}
	h1{
	text-shadow:3px 5px 8px Gray;
	margin-botton:10px;
	}
</style>