<html>
	<head>
		<title>Pagina Exemplo em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
		
		for ($i = 20;$i < 50;$i++){
			$primo = true;
					for ($j = 2;$j < $i -1 ;$j++){
						
						$resto  = $i % $j;
						
						if($resto == 0) {
							$primo = false;
						}
		}
			if($primo == true){
                echo $i."<br>";
            }
		}
		?>
			
	</body>
</html>