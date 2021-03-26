   <html>
<head>
<title> Pagina em php </title>


</head>
<body>
<form method="post" action="dados.php">
<?php
$FAH = $_POST["f"];
if($FAH == ""){
	echo "PREENCHA O CAMPO";
}
else{
echo $FAH."º FAHRENHEIT são ".converteFAH($FAH)."º CELSIUS";
}
?>
</form>
</body>
</html>
<?php
function converteFAH($CEL){
	$CEL = (($CEL-32)/1.8);
return $CEL;
}
?>