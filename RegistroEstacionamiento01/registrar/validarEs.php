<?php

include('dp.php');


if (isset($_POST['registrarse'])) {
    $nombre1=$_POST["nombre"];
    $direccion1=$_POST["direccion"];
    $espacios1=$_POST["espacios"];
    $espaciosdisponibles1=$_POST["espaciosdisponibles"];


  

    $insertarD= "INSERT INTO punto_de_atención(Nombre,Dirección,Espacios,EspaciosDisponibles)
                             VALUES ('$nombre1','$direccion1','$espacios1','$espaciosdisponibles1')"; 

    $ejecutarInsertar = mysqli_query($conexion,$insertarD);

    if (!$ejecutarInsertar) {
        echo '<script language="javascript">';
        echo 'alert("Error, no se ha enviado")';
        echo '</script>';;
    }
    else{
 
        echo '<script language="javascript">';
        echo 'alert("ENVIADO CON EXITO!!")';
        echo '</script>';
        ?>

        <?php
        include("Estacionamiento.php");
        
    }
}

?>