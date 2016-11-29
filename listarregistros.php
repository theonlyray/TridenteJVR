<?php
require_once("conectar.php");
$db =$_POST["basededatos"];
$con=mysqli_connect($servidor,$usuario,$password,$db);
$sql="SELECT * FROM $_POST[tabla]";
$resultado=mysqli_query($con,$sql);//Se ejecuta la consulta y se guarda el resultado
if(mysqli_num_rows($resultado)>=0){//Se verifica si la consulta contiene registros

	echo '<thead>';
            while($campos=mysqli_fetch_field($resultado)){
                echo"<th>".$campos->name;
            }
    echo '</thead>
        <tbody>';
    $i=1;
    $numcampos=mysqli_num_fields($resultado);
	while($reg=mysqli_fetch_row($resultado)){// se recorren los registros obtenidos
		echo '
		<tr>';
        for( $i=0 ; $i < $numcampos ; $i++ ){
        echo "<td>".$reg[$i];               
        }
            echo'</tr>'; //Se imprimen los campos
	}
	echo "</tbody>";
}
mysqli_close($con);// Se cierra la coneccion al servidor
?>