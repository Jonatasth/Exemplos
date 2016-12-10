<form action="" method="get">
  <div class="form-group">
  <label for="numero">Digite um numero</label>
  <input class="form-control" name="AA" id="numero" type="text">
  <input class="form-control" name="BB" id="numero" type="text">
  <input class="form-control" name="CC" id="numero" type="text">
  <input class="form-control" name="DD" id="numero" type="text">
  </div>
  <input name="entrar" type="submit" class="btn btn-default">
</form> 
 <?php
 
 print_r($_GET);
 
$AA = isset($_GET['AA']) ? $_GET['AA'] : '0';
$BB = isset($_GET['BB']) ? $_GET['BB'] : '0';
$CC = isset($_GET['CC']) ? $_GET['CC'] : '0';
$DD = isset($_GET['DD']) ? $_GET['DD'] : '0';

//$RESULTADO = ($AA + $CC) <=> ($BB * $DD)
$soma = $AA + $CC;
$multiplicacao = $BB * $DD;

if($soma > $multiplicacao){
	echo 'A+C é maior que B+D';
}
elseif($soma < $multiplicacao){
	echo'A+C é menor que B+D';
}
else
	echo 'A+C é igual a B+D';

?>
	