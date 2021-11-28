<?php

include('dp.php');


if (isset($_POST['registrarse'])) {
    $NombreU1=$_POST["nombre"];
    $tusuario1=$_POST["Tusuario"];
    $auto1=$_POST["Tvehiculo"];
    $modelo1=$_POST["modelo"];
    $color1=$_POST["color"];
    $matricula1=$_POST["matricula"];
    $fecha1=$_POST["fecha"];
    $hora1=$_POST["hora"];



  

    $insertarD= "INSERT INTO vehículo (NombeUsuario,Indentificacion,Tipo,Modelo,Color, Matricula,Fecha,Hora)
                             VALUES ('$NombreU1','$tusuario1','$auto1','$modelo1','$color1','$matricula1','$fecha1','$hora1')";



    $ejecutarInsertar = mysqli_query($conexion,$insertarD);

    if (!$ejecutarInsertar) {
        echo '<script language="javascript">';
        echo 'alert("Error, no se ha enviado")';
        echo '</script>';;
        include("Registro.php");
    }
    else{
 
        echo '<script language="javascript">';
        echo 'alert("ENVIADO CON EXITO!!")';
        echo '</script>';
        ?>

        <?php
        include("Registro.php");
        
    }
}

?>