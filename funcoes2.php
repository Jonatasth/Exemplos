<?php
function incByValue($var, $valor){
	//$var = 2;
	return $var += $valor;
}

function incByRef(&$var, $valor){
	//$var = 'ofgvperuvbhperuvhmptbrt,ht´bmrowib';
	return $var += $valor;
}

$a = 1;
echo incByValue($a,2);//retorna a=1
echo "a=$a\n";

$a = 1;
echo incByRef($a,2);//retonra a=3
echo "a=$a\n";

?>