    <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$nome = $_POST["Nome"];
$tipo = $_POST["tipo"];
$livro = $_POST["Livro"];
$data_atual = date('d/m/Y');
$data_novaAluno = date('d/m/Y',strtotime("+3 days"));
$data_novaProfessor = date('d/m/Y',strtotime("+10 days"));

			if( $nome == "" || $tipo == "" || $livro == ""){
				echo "Preencha todos os campos";
				
			}else{
				echo "################################## <br>";
				echo "Biblioteca da Universidade <br>";
				echo "##################################<br>";
				echo "Usuario: $nome<br>";
				echo "Tipo: $tipo<br>";
				echo "##################################<br>";
				echo "Livro: $livro<br>";
				echo "Data de Retirada: $data_atual<br>";
				if($tipo == "Aluno")
				{
				echo "Data de Retirada: $data_novaAluno<br>";
				}
				else{
				echo "Data de Retirada: $data_novaProfessor<br>";
				}
}
						
			
?>
</form>
</body>
</html>