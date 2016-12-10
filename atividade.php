<form action="" method="get">
  <div class="form-group">
  <label for="numero">Digite um número</label>
  <input class="form-control" name="numero" id="numero" type="text">
  </div>
  <input name="entrar" type="submit" class="btn btn-default">
</form> 
 <?php
 define("R1", "Valor Igual a Zero");
 define("R2", "Valor Negativo");
 define("R3", "Valor Positivo");
$numero = isset($_GET['numero']) ? $_GET['numero'] : '0';
/*$numero= $_GET['numero'] ?? '0';*/
if ($numero == 0){
	echo R1;
}
if ($numero < 0){
	echo R2;
}
if($numero >= 1){
	echo R3;
}

?>
	
	
