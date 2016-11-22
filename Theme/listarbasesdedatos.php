<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $db="";
    $con=mysqli_connect($servidor,$usuario,$password,$db);
    if(!$con){
        echo "Error al conectar a la base de datos";
    }
    $sql="SHOW DATABASES";
    $resultado=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultado)>0){
        echo '<div id="sidebar"  class="nav-collapse ">
              
              <ul class="sidebar-menu" id="nav-accordion">';
        while($reg=mysqli_fetch_assoc($resultado))
        {
         echo"<li><a href='#'";?> 
         onclick='listartablas("<?php
            echo $reg['Database'];?>")'>
                <?php
            echo "<i class='fa 
         fa-database fa-fw'></i>".$reg['Database']."</a></li>";   
        }
         echo"     </ul>
              
          </div>";
    }
    mysqli_close($con);
?>