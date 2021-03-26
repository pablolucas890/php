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
	$n1[5] = $_POST["n6"];
	$n1[6] = $_POST["n7"];
	$n1[7] = $_POST["n8"];
	$n1[8] = $_POST["n9"];
	$n1[9] = $_POST["n10"];
	$media=0;
	$maior=0;
	$menor=0;
		
$media = ($n1[0] + $n1[1]+$n1[2] +$n1[3] +$n1[4] +$n1[5] +$n1[6] +$n1[7] +$n1[8] +$n1[9])/10;
echo "A média dos números digitados é: ".$media."</br>";
			
		for($i=0;$i<10;$i++)
	{
		if ($n1[$i] > $maior){
			$maior = $n1[$i];
	
	}if($i==0){
		$menor=$n1[$i];
	}else{
		if($n1[$i]<$menor){
		$menor = $n1[$i];
		}
			
	}
	}
	echo "Maior número digitado é: ".$maior."</br>";
	echo "Menor número digitado é: ".$menor;
	

		$par = 0;
		$percentual =0;
		for($p=0;$p<10;$p++){
			if ($n1[$p]%2 == 0){
				$par =$par+1;
			}
		}
		$percentual = $par/10;
		echo "</br>O percentual de par é: ".$percentual;
	
	?>
	
</body>
</html>
   
	