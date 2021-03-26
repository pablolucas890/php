<?php
function formatar($string)
{
 $string = str_replace("á", "a", $string);	
 $string = str_replace("ã", "a", $string);
 $string = str_replace("é", "e", $string);
 $string = str_replace("í", "i", $string);
 $string = str_replace("ó", "o", $string);
 $string = str_replace("õ", "o", $string);
 $string = str_replace("ú", "u", $string);
 return $string;
}
?>
<?php
function somar($num1, $num2){
$soma = $num1 + $num2;
return $soma;
}
?>