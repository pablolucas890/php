<html>
<head>
<title> Página exemplo PHP</title>
</head>
<body>


<?php
$saida = "<table width = '100%' border = '1'>";

for($R = 0; $R<=15; $R = $R+3){
	
	for($G = 0; $G<=15; $G = $G+3){
		
	$saida = $saida."<tr>";
	for($B = 0; $B<=15; $B = $B+3){
		
		$color = "#".dechex($R).dechex($R).dechex($G).dechex($G).dechex($B).dechex($B);
		
	$saida = $saida."<td bgcolor = '$color'>$color</td>";
	}
	}
}

?>


<?php echo $saida;?>
</table>
</body>
</html>
