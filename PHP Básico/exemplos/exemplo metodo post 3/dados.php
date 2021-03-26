<html>
	<head>
		<title> Página exemplo - PHP.</title>
		<meta charset ="UTF-8">
	</head>
	<body>
		<?php
		$usuario = $_POST["usuario"];
		$tipo = $_POST["tipo"];
		$titulo =$_POST["titulo"];
		echo "Biblioteca Universitária";
		echo "<br/>";
		echo "------------------------------------------------------------";
		echo "<br/>";
		echo "Usuário:  ";
		echo $usuario ;
		echo "<br/>";
		echo "Tipo:  ";
		echo $tipo;
		echo "<br/>";
		echo "------------------------------------------------------------";
		echo "<br/>";
		echo "Título do livro:  ";
		echo $titulo;
		echo "<br/>";
		echo "Data de retirada:  ";
		echo date("d/m/y")."<br/>";
		echo "Data de devolução:  ";
		dados($tipo);
		echo "<br/>";
		echo "------------------------------------------------------------";	
		
		?>
	</body>
</html>
<?php function dados($tipo){
if($tipo == "aluno"){
			echo date('d/m/Y', strtotime("+3 days"));
		}else{
			echo date('d/m/Y', strtotime("+10 days"));
		}
}
?>
