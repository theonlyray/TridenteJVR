<?php
require_once("conectar.php");//Datos de coneccion
$sql="SHOW DATABASES";//Consulta Sql
$resultado=mysqli_query($con,$sql);//Se ejecuta la consulta y se guarda el resultado
if(mysqli_num_rows($resultado)>0){//Se verifica si la consulta contiene registros
	$numero=mysqli_num_rows($resultado);
    echo $numero;
}else{
    echo "0";
}
mysqli_close($con);// Se cierra la coneccion al servidor
?>