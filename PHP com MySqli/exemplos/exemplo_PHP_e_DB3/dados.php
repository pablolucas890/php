    <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$vetor[0]=$_POST["n1"];
$vetor[1]=$_POST["n2"];
$vetor[2]=$_POST["n3"];
$vetor[3]=$_POST["n4"];



$vetor[4]=$_POST["n5"];
$vetor[5]=$_POST["n6"];
$vetor[6]=$_POST["n7"];
$vetor[7]=$_POST["n8"];
$vetor[8]=$_POST["n9"];
$vetor[9]=$_POST["n10"];


echo ret($vetor);

						
			
?>
</form>
</body>
</html>
<?php 
function ret($vetor){
$maior = 0;
$menor = 0;
$porcentagem = 0;
$quantidade = 0;
for($i=0;$i<sizeof($vetor);$i++){
	$soma = $soma+$vetor[$i];
	if($vetor[$i] > $maior){
		$maior = $vetor;
		
	}
	if($i==0){
		$menor = $vetor[$i];
	}
	else{
		if($vetor[$i] <$menor){
			$menor = $vetor[$i];
		}
	}
	if($vetor[$i] % 2==0){
		$quantidade++;
	}
	$porcentagem = ($quantidade+100) /sizeof($vetor);
	$media = $soma /sizeof($vetor);
	$saida = "Maior numero: ".$maior."<br>"."Porcentagem".$porcentagem."<br>"."Media".$media;
	return $saida;
}
}
