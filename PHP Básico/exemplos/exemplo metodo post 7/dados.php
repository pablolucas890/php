<html>
    <head>
	    <title>Exercício </title>
	</head>
    <body>
	<?php 
	$n1[0] = $_POST["n1"];
	$n1[1] = $_POST["n2"];
	$n1[2] = $_POST["n3"];
	$n1[3] = $_POST["n4"];
	$n1[4] = $_POST["n5"];
	$n2[0] = $_POST["n6"];
	$n2[1] = $_POST["n7"];
	$n2[2] = $_POST["n8"];
	$n2[3] = $_POST["n9"];
	$n2[4] = $_POST["n10"];
    $vetor_completo[0] =$n1[0];
    $vetor_completo[1]= $n1[1];
    $vetor_completo[2]= $n1[2];
    $vetor_completo[3] =$n1[3];
    $vetor_completo[4]= $n1[4];
    $vetor_completo[5]= $n2[0];
    $vetor_completo[6]= $n2[1];
    $vetor_completo[7] =$n2[2];
    $vetor_completo[8]= $n2[3];
    $vetor_completo[9] =$n2[4];
	
	for($i=0; $i<10;$i++){
	for($j=$i+1; $j<10;$j++){
if($vetor_completo[$i] > $vetor_completo[$j]){
	
	$temp = $vetor_completo[$i];
	$vetor_completo[$i] = $vetor_completo [$j];
	$vetor_completo[$j] = $temp;
}
}
}
echo "Vetor";
for($i=0; $i<10;$i++){
	echo "<br>".$vetor_completo[$i];
}
	
	?>
	
</body>
</html>
   
	