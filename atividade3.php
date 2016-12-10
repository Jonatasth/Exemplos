<form action="" method="get">
  <div class="form-group">
  <label for="numero">Digite dois numeros: </label>
  <input class="form-control" name="num1" id="numero" type="text">
  <input class="form-control" name="num2" id="numero" type="text">
  </div>
  <input name="entrar" type="submit" class="btn btn-default">
</form> 
 <?php
 $num1 = isset($_GET['num1']) ? $_GET['num1'] : '0';
 $num2 = isset($_GET['num2']) ? $_GET['num2'] : '0';
 
 $contador = $num1;
 
 while($contador  < $num2){
 	echo $contador;
 	echo '<br/>';
 	$contador++;
 }
 
 ?>
