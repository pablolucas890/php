
	<head>
		<title>Pagina Exemplo em PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table width="100%" border="1">
		<?php
		$nome[0]="Paulo";
		$nome[1]="Valmir";
		$nome[2]="Cristina";
		$nome[3]="Julio";
		$nome[4]="Maria";
		$nome[5]="Pablo";
		$nome[6]="Eduardo";
		$nome[7]="Maria";
		$nome[8]="Clara";
		$nome[9]="Marcos";
		
		for($i=0;$i<10;$i++){
			echo "<tr> <td>";
		echo $nome[$i];
		echo "</tr> </td>";
		echo "<br/>";
		
		}
		?>
		</table:
			
	</body>
</html>