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
$maior = 0;
$numeros[0] = $n1;
$numeros[1] = $n2;
$numeros[2] = $n3;

			for ($i = 0; $i < 3; $i++){
	         if($numeros[$i]>$maior){
				 $maior = $numeros[$i];
			 }
			}
			if( $n1 == "" || $n2 == "" || $n3 == ""){
				echo "Preencha todos os campos";
			}else{
			echo "Maior numero : $maior";
			}
			?>
</form>
</body>
</html>