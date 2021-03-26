    <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$vetor[0]=$n1;
$vetor[1]=$n2;
$vetor[2]=$n3;
$vetor[3]=$n4;

if( $n1 == "" || $n2 == "" || $n3 == "" || $n4 == ""){
	
echo "Preencha todos os campos";
		
}else{
for($i=0; $i<4;$i++){
	for($j=0; $j<4;$j++){
	if($vetor[$i]<$vetor[$j])
	{
		$aux = $vetor[$i];
		$vetor[$i] = $vetor[$j];
		$vetor[$j] = $aux;
		echo "$vetor[$aux]";
	}
}
}

}
						
			
?>
</form>
</body>
</html>