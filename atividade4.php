<form action="" method="get">
  <div class="form-group">
  <label for="numero">Digite um numero: </label>
  <input class="form-control" name="num" id="numero" type="text">
  </div>
  <input name="entrar" type="submit" class="btn btn-default">
</form> 
 <?php
 $num = isset($_GET['num']) ? $_GET['num'] : '0';
 
 $contador = '0';
 
 while($contador  <= $num){
 	echo $contador;
 	echo '<br/>';
 	$contador++;
 }
 
 ?>

