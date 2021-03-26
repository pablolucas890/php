<html>
<head>
<title>
Pagina PHP
</title>
<body>

<?php 
$A = "Hoje é o dia ";
$B = "do meu aniversário.";
echo $A.$B;//concatenado
echo "<br/>";
echo rtrim($A).$B;//retirando os espaços do final de $A e concatenando
echo "<br/>";
echo strlen($B);//mostrando o tamanho da string $B
echo "<br/>";
echo strtolower($A);//trnsformado a string $A para maiusculas
echo "<br/>";
echo strtr($A,"é","e");//substituiu "é" por "e"
?>

</center>
</head>
</html>