<html>
<head>
  <link rel="icon" href="./img/1.png">
<meta charset="utf-8">
<title>aluCAR - Aluguel de carros</title>
</head>
<body>
<div id="centro">
<h1> CADASTRAR </h1>
<form method="post" action="dadosCadastro.php">
NOME:
<input type="text" name="nome">
<br/>
<br/>
CPF: 
<input type="text" name="cpf">
<br />
<br/>
ENDEREÇO:
<input type="text" name="endereco">
<br />
<br/>
TELEFONE:
<input type="text" name="tel">
<br />
<br/>
E-MAIL:
<input type="text" name="email" id="email">
<br />
<br/>
<div id= "enviar">
<input type="submit" value="CADASTRAR" id="botao">
</div>
</form>
</div>
</body>
</html>


<style>
input{
	width:200px;
	float:right;
	border-color:black;
}
#enviar{
	margin-top:30px;
text-align:center;
}
 body{
	 background:url("./img/back.png");
	 background-size:cover;
	 		font-family:Arial Black,Consolas,mv boli, comic sans ms;
		font-size:16px;
 }
#centro{
	text-align:Justify;
	 		margin-left:38%;
	margin-right:38%;
	margin-top:200px;
	border:2px solid Black;
	padding:30px;
	background-color:#A7A5A8;
	height:380px;
}
#botao
{

	border:2px solid black;
	color:black;
	width:90%;
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
	h1{
	text-shadow:3px 5px 8px Gray;
	margin-botton:10px;
	text-align:center;
	}
</style>