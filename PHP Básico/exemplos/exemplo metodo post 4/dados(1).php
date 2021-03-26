<html>
    <head>
	    <title>Exercício </title>
	</head>
    <body>
	<?php 
	$v1[0] = $_POST["v1"];
	$v1[1] = $_POST["v2"];
	$v1[2] = $_POST["v3"];
	$v1[3] = $_POST["v4"];
	
	ordem($v1);

		?>
	</body>
</html>	
    <?php function ordem($v1){
	$maior = 0;
	$indice = 0;
	$aux = 0;
 	
		for($i=0;$i<4;$i++)
	{
        for($j=0;$j<4;$j++)
		{
			if ($v1[$i] < $v1[$j])
			{
				$aux = $v1[$i];
				$v1[$i] = $v1[$j];
				$v1[$j] = $aux;

			}
				
		}
	}echo $v1[0].$v1[1].$v1[2].$v1[3];
	}
		?>