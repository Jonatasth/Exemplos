<?php
$contador=1;
function obtemProximo(){
	static $contador=0;
	return ++$contador;
}

echo obtemProximo(), "\n";//retorna 1
echo obtemProximo(), "\n";//retorna 2
echo obtemProximo(), "\n";//retorna 3

?>