<?php
$servidor="localhost";
$usuario="root";
$password="";
$db="";

$con=mysqli_connect($servidor,$usuario,$password,$db);
if(!$con){
	echo "Error al conectar al servidor";
}

?>