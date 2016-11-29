<?php
require_once("conectar.php");//Datos de coneccion
$sql="SHOW DATABASES";//Consulta Sql
$resultado=mysqli_query($con,$sql);//Se ejecuta la consulta y se guarda el resultado
if(mysqli_num_rows($resultado)>0){//Se verifica si la consulta contiene registros
	while($reg=mysqli_fetch_assoc($resultado)){// se recorren los registros obtenidos
		echo '
		<li>
            <a href="#"';?> onclick="listartablas('<?php echo $reg["Database"];?>')" 
            <?php 
            echo '>
                <i class="ti-server"></i>
                <p>'.$reg["Database"].'</p>
            </a>
        </li>'; //Se imprimen los campos
	}
}
mysqli_close($con);// Se cierra la coneccion al servidor
?>