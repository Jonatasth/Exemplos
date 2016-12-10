<?php include ('header.php'); ?>
<?php include('menu.php'); ?>
<?php require ('dados.php');?>
	<table>
		<tr>
			<td> Título</td>
			<td> Turma</td>
		</tr>
		<?php foreach ($cursos as $curso){?>
		<tr>
			<td><?php echo $curso['titulo']?></td>
			<td><?php echo $curso['turma']?></td>
		</tr>
		<?php } ?>
	</table>
<?php include ('footer.php');?>