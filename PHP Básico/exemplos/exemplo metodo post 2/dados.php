    <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$nome = $_POST["Nome"];
$email = $_POST["Email"];
$data = $_POST["Data"];
$cartao = $_POST["selCartao"];
$bandeira = "";
if($cartao == 1){
	$bandeira = "Visa";
}
else if($cartao == 2){
	$bandeira = "MasterCard";
}
else{
	$bandeira = "Elo";
}

			if( $nome == "" || $email == "" || $data == ""|| $cartao == ""){
				echo "Preencha todos os campos";
				
			}else{
				echo"Nome: $nome<br>Email: $email<br>Data de Nascimento: $data<br>Bandeira do Cartão: $bandeira";
}
						
			
?>
</form>
</body>
</html>