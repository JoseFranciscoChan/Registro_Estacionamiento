<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style2.css">
    <link rel="icon" type="image/png" href="Images/logo2.png"/>
    <title>Mi perfil</title>

        <style type="text/css">
            
            * {
                margin:0px;
                padding:0px;
            }
            
            #header {
                margin:auto;
                width:700px;
                font-family:Arial, Helvetica, sans-serif;
            }
            
            ul, ol {
                list-style:none;
            }
            
            .nav > li {
                float:left;
            }
            
            .nav li a {
                background-color:#363131;
                color:#fff;
                text-decoration:none;
                padding:24px 28px;
                display:block;
            }

            .nav .a1 {
                background-color:#afaeb5c7;
                color:#fff;
                text-decoration:none;
                padding:24px 28px;
                display:block;
            }
            
            .nav li a:hover {
                background-color:#434343;
            }
            
            .nav li ul {
                display:none;
                position:absolute;
                min-width:160px;
            }
            
            .nav li:hover > ul {
                display:block;
            }
            
            .nav li ul li {
                position:relative;
            }
            
            .nav li ul li ul {
                right:-140px;
                top:0px;
            }


            
        </style>
</head>

<body style="background-color:#fff;">

    
    <header class="shadow">
        <div class="header-content d-flex justify-content p-2">
            <a href="../registrar/Registro.php"><img src="./Images/Auto.jpg" alt="" id="header-logo"></a>
            <div id="header-msg" class="ml-5 align-self-center">Centro de Registro </div>            
        
            <div id="header-msg" class="ml-5 align-self-center">Sesión:</div>
            <div id="header-msg" class="ml-5 align-self-center" >Activa</div>
            <div style="color:#363131" id="header-msg" class="ml-5 align-self-center">---------------------------------</div>
            <div style="color:#363131" id="header-msg" class="ml-5 align-self-center">---------------------------------</div>                       
            <a href="../registrar/Registro.php"><img src="./Images/logo2.png" alt="" id="header-logo"></a>  
    </div>


    <div id="header">
            <ul class="nav">
                <li><a href="registro.php">Registrar</a>
                <ul>
                        <li><a href="registro.php">Añadir un nuevo Auto</a></li>
                </ul>
                    </li>
                <li><a href="Visualizar.php">visualizar</a>
                    <ul>
                        <li><a href="Visualizar.php">Todos</a></li>
                        <li><a href="Visualizar_visitantes.php">Autos visitantes</a></li>
                        <li><a href="Visualizar_profesores.php">Profesores</a></li>
                        <li><a href="Visualizar_alumnos.php">Alumnos</a></li>
                        <li><a href="Visualizar_pa.php">Personal de Administración</a></li>
                    </ul>
                </li>
                <li><a href="Estacionamiento.php">Estacionamiento</a>
                    <ul>
                        <li><a href="Estacionamiento.php">acerca de</a></li>
                    </ul>
                </li>

                <li><a class="a1" href="">Mi Perfil</a>
                    <ul>
                        <li><a href="">Observar mi informacion</a></li>
                    </ul>
                </li>

                <li><a href="salir.php">Sesión</a>
                    <ul>
                        <li><a href="salir.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
            </ul>
        </div>
            </header>

        <br>

        <h1 align="center">Mi Información de Administrador</h1>
        <br><?php 

    $conexion=mysqli_connect('localhost','root','','registroestacionamiento');
    ?>


    <table border="1" style="border-collapse: separate" bordercolor="#5C423C" bgcolor="#94D3C3" width="1300">
        <tr>
            <th>   nombre   </th>
            <th>   direccion   </th>
            <th>   telefono   </th>
            <th>   usuario   </th>
            <th>   password   </th>   
        </tr>

        <?php 

        $sql="SELECT * from administrador";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>

        <tr>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['direccion'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td>*******</td>
        </tr>

    <?php 
    }
     ?>

 </table> 
<br>
     <br>
 <table border="1" style="border-collapse: separate" bordercolor="#5C423C" bgcolor="#94D3C3" width="1300">
      <tr>
            <td align="center"><img src="./Images/admin.jpg"></td>
        </tr>
</table>    

    <br>


</body>

</html>