   <html>
<head>
<title> Pagina em php </title>
</head>
<body>
<h1 align="center">
Crie um formulário onde o usuário informa seu nome, seu e-mail, sua data de nascimento e escolha numa lista suspensa a bandeira do seu cartão de crédito(Visa, Mastercard, Elo). Ao clicar em em botão de submit, exiba todos os dados na tela.
</h1>

<form method="post" action="dados.php">
Nome
<input type="text" name="Nome">
<br>
Email
<input type="text" name="Email">
<br>
Data de Nascimento
<input type="date" name="Data">
<br>
Bandeira  do cartão
<select name="selCartao">
<option value="1">Visa </option>
<option value="2">Mastercard </option>
<option value="3">Elo </option>
</select>
<br>
<input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>