<?php
	/*$nome='LULA';
	echo $a="Ola, $nome<BR/>";
	echo $a ='Ola, $nome';*/
	//--------------------------
	/*$valida=true;//ou false 
	if ($valida){
		print "Validado\n";
	} */
	//--------------------------
	
	$estados = array();
	//print_r($estados);
	$cidades = array('Caxias', 'Porto');
	//print_r($cidades);
	$bairros = array('Norte'=>array('aeroporto','pelegrino'),'Sul'=>array('desvio'));
	//print_r($bairros, true);
	//var_dump($bairros);
	print_r($bairros['Norte']);
	print_r($cidades[1]);
?>