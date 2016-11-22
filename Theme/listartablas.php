<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $db="";
    $con=mysqli_connect($servidor,$usuario,$password,$db);
    if(!$con){
        echo "Error al conectar a la base de datos";
    }
    $sql="SHOW TABLES from $_GET[basededatos]";
    $resultado=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultado)>=0){
        $i=1;
        while($reg=mysqli_fetch_row($resultado)){
            echo "<tr>
                    <td>".$i++;
            echo    "<td>".$reg[0];
            echo    "<td>Acciones";
            echo    "<td>Fila";
            echo    "<td>Tipo";
            echo "</tr>";
        }
    }
    mysqli_close($con);

?>