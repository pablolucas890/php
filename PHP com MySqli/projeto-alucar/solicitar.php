 <html>
    <head>
	<meta charset="utf-8">
	    <title>aluCAR - Aluguel de carros</title>
	</head>
    <body>
		
		
	<div id="top">
	
	<a href="index.php" id ="l"><img src="./img/AA.png"></a>
	</div>
	<div id="centro">
		<form method="post" action="solicitarConfirmado.php">
CARRO:
 <select name="Carro">
<option value="Fiat Uno">Fiat Uno</option>
<option value="Fiat Toro">Fiat Toro</option>
<option value="Gol">Gol</option>
<option value="Hillux">Hillux</option>
</select>
<br>
<br>
DATA:
<input type="date" name="data"/>
<br>
<br>
HORA:
<input type="time" name="hora"/>
<br>
<br>
TEMPO:
 <select name="tempo">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>

</select>
hora(s)
<div id= "enviar">

	<input type="submit" value="Solicitar" id= "botao">
	</form>
</div>
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
#enviar{
	margin-top:30px;
text-align:center;
}
 body{
	 background:url("./img/back.png");
	 background-size:cover;
	 		font-family:Algerian,Arial Black,Consolas,mv boli, comic sans ms;
		font-size:16px;
 }
#centro{
	text-align:Justify;
	 		margin-left:40%;
	margin-right:40%;
	margin-top:200px;
	border:2px solid Black;
	padding:30px;
	background-color:#A7A5A8;
}
#top{
	background-color:#A7A5A8;
	position:fixed;
	z-index:9999;
	width:100%;
	height:53px;
	border:2px solid black;
	padding-right:50px;
		margin-left:-10px;
	margin-top:-200px;
	
	
}
b{
		color:#7F3700;
	}
	[hidden] {
    display: none;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

figure {
    margin: 0;
}
p:hover{
	background:#40403F;
		transition-duration:0.3s;
		color:white;
}

a{
	text-decoration:none;
	color:black;
	
}
p{
	border:2px solid black;
	color:black;
	width:90%;
	padding:5px;
	background:white;
}#l img{
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
	}

</style>