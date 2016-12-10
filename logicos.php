<?php
//and
if (true and false){
	echo 'false';
	echo '<BR/>';
}	
if (false and false){
	echo 'false';
	echo '<BR/>';
}
if (true and true){
	echo 'true';
	echo '<BR/>';
}
if (false and true){
	echo 'false';
	echo '<BR/>';
}

//or
if (true or false){
	echo 'true';
	echo '<BR/>';
}

if (true or true){
	echo 'true';
	echo '<BR/>';
}
if (false or true){
	echo 'true';
	echo '<BR/>';
}

if (false or false){
	echo 'false';
	echo '<BR/>';
}
//xor
if (true xor true){
	echo 'false';
	echo '<BR/>';
}

if (false xor false){
	echo 'false';
	echo '<BR/>';
}
if (false xor true){
	echo 'true';
	echo '<BR/>';
}

if (true xor false){
	echo 'true';
	echo '<BR/>';
}
