<?php
$calculo=function ($a,$b){
	return $a+$b;
};

echo $calculo(1,2);

$greet = function($name)
{
	printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');


?>