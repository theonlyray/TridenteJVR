<?php
require_once("conectar.php");
$sql="SHOW TABLES FROM $_GET[basededatos]";
$resultado=mysqli_query($con,$sql);//Se ejecuta la consulta y se guarda el resultado
if(mysqli_num_rows($resultado)>0){//Se verifica si la consulta contiene registros

	echo '<thead>
            <th>#</th>
        	<th>Tabla</th>
        	<th>Acciones</th>
         </thead>
        <tbody>';
    $i=1;
	while($reg=mysqli_fetch_row($resultado)){// se recorren los registros obtenidos
		echo '
		<tr>
            <td>'.$i++.'
            <td>'.$reg[0].'
            <td><span class ="ti-search" onclick="listarregistros(\''.$_GET["basededatos"].'\',\''.$reg[0].'\');"></span>
            <span class ="ti-trash"></span>
        </tr>'; //Se imprimen los campos
	}
	echo "</tbody>";
}
mysqli_close($con);// Se cierra la coneccion al servidor
?>