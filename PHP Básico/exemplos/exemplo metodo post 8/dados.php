<html>
    <head>
	    <title>Exercício </title>
	</head>
    <body>
	<?php 
	$nome = $_POST["nome"];
	$al1 = $_POST["alter1"];
	$al2 = $_POST["alter2"];
	$al3 = $_POST["alter3"];
	$tipo = $_POST["tipo"];
	$data = date("d/m/y");
    $a1 = 8;
    $a2 = 6;
    $a3 = 15;
    $a4 = 5;
    $a5 = 5;
	
	$valor1 = 0;
	$valor2 = 0;
	$valor3 = 0;
	if($al1 == "O Senhor dos Anéis - A Sociedade do Anel	R$8,00"){
	$valor1 = $a1+$valor1;
	}elseif($al1 == "Star Wars - O Império Contra-Ataca	R$6,00"){
	$valor1 = $a2+$valor1;
	}
	elseif($al1 == "Jogador Nº 1	R$15,00"){
	$valor1 = $a3+$valor1;
	}
	elseif($al1 == "Forest Gump	R$5,00"){
	$valor1 = $a4+$valor1;
	}
	else{
	$valor1 = $a5+$valor1;
	}
	
	
	
		if($al2 == "O Senhor dos Anéis - A Sociedade do Anel	R$8,00"){
	$valor2 = $a1+$valor2;
	}elseif($al2 == "Star Wars - O Império Contra-Ataca	R$6,00"){
	$valor2 = $a2+$valor2;
	}
	elseif($al2 == "Jogador Nº 1	R$15,00"){
	$valor2 = $a3+$valor2;
	}
	elseif($al2 == "Forest Gump	R$5,00"){
	$valor2 = $a4+$valor2;
	}
	else{
	$valor2 = $a5+$valor2;
	}
	
			if($al3 == "O Senhor dos Anéis - A Sociedade do Anel	R$8,00"){
	$valor3 = $a1+$valor3;
	}elseif($al3 == "Star Wars - O Império Contra-Ataca	R$6,00"){
	$valor3 = $a2+$valor3;
	}
	elseif($al3 == "Jogador exemplo metodo post 6Nº 1	R$15,00"){
	$valor3 = $a3+$valor3;
	}
	elseif($al3 == "Forest Gump	R$5,00"){
	$valor3 = $a4+$valor3;
	}
	else{
	$valor3 = $a5+$valor3;
	}
	
	
	
	if($tipo == "Premiun")
	{
		$total = ($valor1-(($valor1/100)*15)) + ($valor2-(($valor2/100)*15)) +($valor3-(($valor3/100)*15));
		
	}
	elseif($tipo == "Normal"){
		$total = $valor1 + $valor2 + $valor3;
	}
	else{
		$total = ($valor1-(($valor1/100)*15)) + ($valor2-(($valor2/100)*15)) +($valor3-(($valor3/100)*15));	
		}
	echo "IFSULDEMINAS VIDEO<br>";
    echo "Nome: $nome<br>";
	echo "Tipo: $tipo<br>";
	echo "Filmes: $al1<br>$al2<br>$al3<br>";
	echo "Total: $total<br>";
	echo "Data: $data<br>";
	?>
	
</body>
</html>
   
	