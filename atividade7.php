<html>
  <head>
    <title>ATIV6</title>
    <meta charset="UTF-8"/> 
  </head>
    <body>
    
    <?php $nome = array(
		array('nome'=>'Thiago','sobrenome'=>'Santos'), 
		array('nome'=>'João','sobrenome'=>'Souza'), 
		array('nome'=>'Ricardo','sobrenome'=>'Silva'), 
		array('nome'=>'Paula','sobrenome'=>'Soares')
		);
     ?>
    
    <table>
    
    <tr>
		<td>Nome</td>
		<td>Sobrenome</td>
	</tr>
	<?php foreach ($nome as $value) { ?>
		<tr>
			<td><?php echo $value['nome']?></td>
			<td><?php echo $value['sobrenome']?></td>
		</tr>
	<?php } ?>
	
	
	</table>
</body>
</html>