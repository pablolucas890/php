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
	$v1[4] = $_POST["v5"];
	$v2[0] = $_POST["v6"];
	$v2[1] = $_POST["v7"];
	$v2[2] = $_POST["v8"];
	$v2[3] = $_POST["v9"];
	$v2[4] = $_POST["v10"];

	igual($v1,$v2);

		?>
	</body>
</html>	
    <?php function igual($v1,$v2){
		
		for($i=0;$i<5;$i++)
	{
		for($j=0;$j<5;$j++)
		{
			if ($v1[$i]==$v2[$j])
			{
				echo $v1[$i];
				echo "<br/>";
			}
				
		}
	}
	}
		?>