<html>
  <head>
    <title>ATIV6</title>
    <meta charset="UTF-8"/> 
  </head>
    <body>
    
    <?php $nomes = array('Thiago', 'João', 'Ricardo', 'Paula');?>
    
    <table>
    
    <tr>
		<td>Nome</td>
	</tr>
	
	<?php foreach ($nomes as $value) { ?>
		<tr>
			<td><?php echo $value;?></td>
		</tr>
	<?php } ?>
	
	</table>
</body>
</html>