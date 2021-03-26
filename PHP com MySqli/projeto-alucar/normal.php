<html>
  <head>
    <link rel="icon" href="./img/1.png">
	<meta charset="utf-8">
	    <title>aluCAR - Aluguel de carros</title>
	</head>
    <body>
	<div id="top">
	
	
	<a href="index.php" id ="l"><img src="./img/AA.png"></a>
	</div>
	<div id= "centro"> 
	<div id="title">
	<h1>
	<FONT SIZE ="50">NOSSOS  CARROS</FONT>
	</h1>
	</div>
<div id="slide">
  <div class="galeria autoplay items-4">
    <div id="item-1" class="movimento-traco"></div>
    <div id="item-2" class="movimento-traco"></div>
    <div id="item-3" class="movimento-traco"></div>
    <div id="item-4" class="movimento-traco"></div>



    <figure class="item">
	 
 <img src="./img/a3.jpg" height="100%" width="100%">
    </figure>

    <figure class="item">
	 
 <img src="./img/a4.jpg" height="100%" width="100%">
    </figure>
	
    <figure class="item">
	 
 <img src="./img/a5.jpg" height="100%" width="100%">
    </figure>
    <figure class="item">
	
      <img src="./img/a6.jpg" height="100%" width="100%">
    </figure>


    <div class="botao">
      <a href="#item-1" class="movimento-button"><img src="./img/a3.jpg" height="70" width="70"></a>
      <a href="#item-2" class="movimento-button"><img src="./img/a4.jpg" height="70" width="70"></a>
      <a href="#item-3" class="movimento-button"><img src="./img/a5.jpg" height="70" width="70"></a>
      <a href="#item-4" class="movimento-button"><img src="./img/a6.jpg" height="70" width="70"></a>


    </div>
  </div>
  
</div>
 <div id="baixo">
	<div id="d1">
	<h1>Aluguel Aprovado:
	</h1>
	<?php
		$servername = "localhost";
    $username = "novousuario";
    $password = "password";
	$dbname =  "locacao";
		$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error()){
		echo "Erro na conexao";
	}
	$sql = "SELECT * FROM solicitacao WHERE situacao='sim'";
	$result = $conn->query($sql);
		if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
		echo "<font size='5px'";
			echo "<br>";
			echo "CARRO: ";
			echo "<b>";
			echo $row["nomeCarro"];
			echo "</b>";
			echo "<br>DATA: ";
			echo "<b>";
			echo $row["data"];
			echo "</b>";
			echo "<BR/>HORA:  ";
			echo "<b>";
			echo $row["hora"];
			ECHO " horas";
			echo "</b>";
			echo "<BR>TEMPO: ";
			echo "<b>";
			echo $row["tempo"];
			echo "</b>";
			echo " horas";
			echo "<br>";
			echo "<div id='linha'></div>";
			echo "</font>";
		
		}
	}
	

	?>
	</div>
	<div id= "d2">
	<h1>	Aluguel Pendente:
	</h1>
		<?php
	
		$servername = "localhost";
    $username = "novousuario";
    $password = "password";
	$dbname =  "locacao";
		$conn = new mysqli($servername, $username, $password, $dbname);
	if(mysqli_connect_error()){
		echo "Erro na conexao";
	}
	$sql = "SELECT * FROM solicitacao WHERE situacao='nao'";
	$result = $conn->query($sql);
		if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			
			echo "<font size='5px'";
			echo "<br>";
			echo "CARRO: ";
			echo "<b>";
			echo $row["nomeCarro"];
			echo "</b>";
			echo "<br>DATA: ";
			echo "<b>";
			echo $row["data"];
			echo "</b>";
			echo "<BR/>HORA:  ";
			echo "<b>";
			echo $row["hora"];
			ECHO " horas";
			echo "</b>";
			echo "<BR>TEMPO: ";
			echo "<b>";
			echo $row["tempo"];
			echo "</b>";
			echo " horas";
			echo "<br>";
			echo "<div id='linha'></div>";
			echo "</font>";
		
		}
	}
	?>
	</div>
    <form method="post" action="solicitar.php" >
	<input type="submit" value="SOLICITAR" id="botao">
	</form>
	</div>

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
#baixo{
    box-shadow:0px 0px 7px #666;
    border:1px solid #999;
    border-radius:10px;
	height:550px;
	background:#CAC8CC;
	margin-top:10px;
	margin-bottom:10px;
}
#l img{
	width:50px;;
	height:100%;
}
#linha{
	border-top:1px dotted Black;
	height:20px;
}
	h1{
	text-shadow:3px 5px 8px Gray;
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
}
 body{
	 background:#A7A5A8;
	 background-size:cover;
	 		font-family:Arial Black,Consolas,mv boli, comic sans ms;
		font-size:16px;
 }
#centro{
	box-shadow:0px 0px 7px black;
	text-align:center;
	margin-left:20%;
	margin-right:20%;
	padding:30px;
	height:1300px;
	background:#CAC8CC;
}
	#d2{
	margin-left:5%;
	background-color:#f6f6f6;
    box-shadow:0px 0px 7px #666;
    border:1px solid #999;
    border-radius:10px;
	height:500px;
	margin-top:20px;
	width:35%;
	float:left;
	margin-bottom:20px;
	text-align:justify;padding-left:10px;
	color:black;
	font-family:Arial Black;
	overflow-y: scroll;
	
	}
	#d1{
		
		margin-right:5%;
	background-color:#f6f6f6;
    box-shadow:0px 0px 7px #666;
    border:1px solid #999;
    border-radius:10px;
	margin-top:20px;
	width:35%;
	float:right;
	margin-bottom:20px;
	text-align:justify;padding-left:10px;
	color:black; 
	font-family:Arial Black;
		overflow-y: scroll;
	height:500px;
	
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
	margin-top:-10px;
	
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

.galeria .movimento-traco:target ~ .botao .movimento-button {
  color: white;
  text-shadow:1px 1px 5px black;
}

.galeria .movimento-button:first-of-type,
.galeria .movimento-traco:nth-of-type(1):target ~ .botao .movimento-button:nth-of-type(1),
.galeria .movimento-traco:nth-of-type(2):target ~ .botao .movimento-button:nth-of-type(2),
.galeria .movimento-traco:nth-of-type(3):target ~ .botao .movimento-button:nth-of-type(3),
.galeria .movimento-traco:nth-of-type(4):target ~ .botao .movimento-button:nth-of-type(4),
.galeria .movimento-traco:nth-of-type(5):target ~ .botao .movimento-button:nth-of-type(5) {
  color: black;
    text-shadow:1px 1px 5px #fff;

}

.galeria .item:first-of-type {
  position:relative;
  pointer-events: auto;
  opacity: 1;
}

.galeria .item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  opacity: 0;
  -webkit-transition: opacity .5s;
  -o-transition: opacity .5s;
  transition: opacity .5s;
}



.galeria .movimento-traco:target ~ .item {
  pointer-events: none;
  opacity: 0;
  -webkit-animation: none;
  -o-animation: none;
  animation: none;
}

.galeria .movimento-traco:target ~ .botao .movimento-button {
  -webkit-animation: none;
  -o-animation: none;
  animation: none;
}

@-webkit-keyframes movimentoAnimation-2 {
  0% {
         color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  14.3%, 50% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  64.3%, 100% {
         color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-o-keyframes movimentoAnimation-2 {
  0% {
         color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  14.3%, 50% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  64.3%, 100% {
         color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@keyframes movimentoAnimation-2 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  14.3%, 50% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  64.3%, 100% {
         color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-webkit-keyframes galeriaAnimation-2 {
  0% {
    opacity: 0;
  }

  14.3%, 50% {
    opacity: 1;
  }

  64.3%, 100% {
    opacity: 0;
  }
}

@-o-keyframes galeriaAnimation-2 {
  0% {
    opacity: 0;
  }

  14.3%, 50% {
    opacity: 1;
  }

  64.3%, 100% {
    opacity: 0;
  }
}

@keyframes galeriaAnimation-2 {
  0% {
    opacity: 0;
  }

  14.3%, 50% {
    opacity: 1;
  }

  64.3%, 100% {
    opacity: 0;
  }
}


@-webkit-keyframes movimentoAnimation-3 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  9.5%, 33.3% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  42.9%, 100% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-o-keyframes movimentoAnimation-3 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  9.5%, 33.3% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  42.9%, 100% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@keyframes movimentoAnimation-3 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  9.5%, 33.3% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  42.9%, 100% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-webkit-keyframes galeriaAnimation-3 {
  0% {
    opacity: 0;
  }

  9.5%, 33.3% {
    opacity: 1;
  }

  42.9%, 100% {
    opacity: 0;
  }
}

@-o-keyframes galeriaAnimation-3 {
  0% {
    opacity: 0;
  }

  9.5%, 33.3% {
    opacity: 1;
  }

  42.9%, 100% {
    opacity: 0;
  }
}

@keyframes galeriaAnimation-3 {
  0% {
    opacity: 0;
  }

  9.5%, 33.3% {
    opacity: 1;
  }

  42.9%, 100% {
    opacity: 0;
  }
}

.galeria .movimento-traco:nth-of-type(1):target ~ .item:nth-of-type(1) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(2):target ~ .item:nth-of-type(2) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(3):target ~ .item:nth-of-type(3) {
  pointer-events: auto;
  opacity: 1;
}




@-webkit-keyframes movimentoAnimation-4 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  7.1%, 25% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  32.1%, 100% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-o-keyframes movimentoAnimation-4 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  7.1%, 25% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  32.1%, 100% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@keyframes movimentoAnimation-4 {
  0% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  7.1%, 25% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  32.1%, 100% {    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-webkit-keyframes galeriaAnimation-4 {
  0% {
    opacity: 0;
  }

  7.1%, 25% {
    opacity: 1;
  }

  32.1%, 100% {
    opacity: 0;
  }
}

@-o-keyframes galeriaAnimation-4 {
  0% {
    opacity: 0;
  }

  7.1%, 25% {
    opacity: 1;
  }

  32.1%, 100% {
    opacity: 0;
  }
}

@keyframes galeriaAnimation-4 {
  0% {
    opacity: 0;
  }

  7.1%, 25% {
    opacity: 1;
  }

  32.1%, 100% {
    opacity: 0;
  }
}

.galeria .movimento-traco:nth-of-type(1):target ~ .item:nth-of-type(1) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(2):target ~ .item:nth-of-type(2) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(3):target ~ .item:nth-of-type(3) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(4):target ~ .item:nth-of-type(4) {
  pointer-events: auto;
  opacity: 1;
}

@-webkit-keyframes movimentoAnimation-5 {
  0% {
    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  5.7%, 20% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  25.7%, 100% {
    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-o-keyframes movimentoAnimation-5 {
  0% {
    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  5.7%, 20% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  25.7%, 100% {
    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@keyframes movimentoAnimation-5 {
  0% {
    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }

  5.7%, 20% {
    color: white;
    color: rgba(255, 255, 255, 0.8);
  }

  25.7%, 100% {
    color: #ccc;
    color: rgba(255, 255, 255, 0.4);
  }
}

@-webkit-keyframes galeriaAnimation-5 {
  0% {
    opacity: 0;
  }

  5.7%, 20% {
    opacity: 1;
  }

  25.7%, 100% {
    opacity: 0;
  }
}

@-o-keyframes galeriaAnimation-5 {
  0% {
    opacity: 0;
  }

  5.7%, 20% {
    opacity: 1;
  }

  25.7%, 100% {
    opacity: 0;
  }
}

@keyframes galeriaAnimation-5 {
  0% {
    opacity: 0;
  }

  5.7%, 20% {
    opacity: 1;
  }

  25.7%, 100% {
    opacity: 0;
  }
}

.galeria .movimento-traco:nth-of-type(1):target ~ .item:nth-of-type(1) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(2):target ~ .item:nth-of-type(2) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(3):target ~ .item:nth-of-type(3) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(4):target ~ .item:nth-of-type(4) {
  pointer-events: auto;
  opacity: 1;
}

.galeria .movimento-traco:nth-of-type(5):target ~ .item:nth-of-type(5) {
  pointer-events: auto;
  opacity: 1;
}


.galeria .movimento-button {
  color: #ccc;
  color: rgba(255, 255, 255, 0.4);
}

.galeria .movimento-button:hover {
  color: white;
  color: rgba(255, 255, 255, 0.8);
}


.galeria .movimento-button {
  display: inline-block;
  margin: 0 .02em;
  font-size: 3em;
  text-align: center;
  text-decoration: none;
  -webkit-transition: color .1s;
  -o-transition: color .1s;
  transition: color .1s;
}


.galeria {
  position: relative;
}
.galeria .item {
	border:2px solid black;
   height:550px;
  overflow: hidden;
  text-align: center;
  background: black;
}

 .movimento-button  img{
	 border:3px solid black;
	 border-radius:105px;
	 box-shadow:0px 0px 6px black;
	 transition: all 0.3s ease;
	
 }
 .movimento-button:hover img{
	 transform:scale(0.95);
	 filter: drop-shadow(0px 0px 10px black);
}

.galeria .botao {
  bottom: 0;
  width: 100%;
  text-align: center;
    position: absolute;
}
.galeria .movimento-button {
  display: inline-block;
  margin: 0 .02em;
  font-size: 3em;
  text-align: center;
  text-decoration: none;
  transition: color .1s;
}
#botao
{
	margin-top: 210px;
	border:2px solid black;
	color:black;
	width-align:center;
	height-align:center;
	
	padding:15px;
	background:white;
	font-family:Arial Black,Consolas,mv boli, comic sans ms;
	font-size:16px;
}
#botao:hover{
	background:#40403F;
		transition-duration:0.3s;
		color:white;
}
input{
	border-color:black;
}
	h1{
	text-shadow:3px 5px 8px Gray;
	margin-botton:10px;
	}
	
	
</style>