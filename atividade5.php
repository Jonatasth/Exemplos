<form action="" method="get">
<div class="form-group">
<label for="numero">Digite um numero: </label>
<input class="form-control" name="A" id="numero" type="text">
<input class="form-control" name="B" id="numero" type="text">
<input class="form-control" name="C" id="numero" type="text">
<input class="form-control" name="D" id="numero" type="text">
</div>
<input name="entrar" type="submit" class="btn btn-default">
</form>
<?php
$A = isset($_GET['A']) ? $_GET['A'] : '0';
$B = isset($_GET['B']) ? $_GET['B'] : '0';
$C = isset($_GET['C']) ? $_GET['C'] : '0';
$D = isset($_GET['D']) ? $_GET['D'] : '0';

$array	=["1"	=>"A",	1=>"B",	"C",2	=>"D"];
print	count($array);

print_r($array);
?>
