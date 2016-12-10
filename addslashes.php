<?php
$str = "Seu nome é O'reilly?";

// Mostra: Seu nome é O\'reilly?
echo addslashes($str);




$str = "Seu nome é O\'reilly?";

// Mostra: Seu nome é O'reilly?
echo stripslashes($str);



echo nl2br("foo isn't\n bar");


?>