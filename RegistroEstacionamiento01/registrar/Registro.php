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
    <title>Registro</title>

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

            }


            .nav li a:hover {
                background-color:#afaeb5c7;
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
            
            input[type="submit"] {
                padding: 10px;
                color: #fff;
                background: #0098cb;
                width: 320px;
                margin: 20px auto;
                margin-top: 0;
                border: 0;
                border-radius: 3px;
                cursor: pointer;
                }
            input[type="submit"]:hover {
                background-color: #00b8eb;
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
                <li ><a class="a1" href="registro.php">Registrar</a>
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

                <li><a href="Mi perfil.php">Mi Perfil</a>
                    <ul>
                        <li><a href="Mi perfil.php">Observar mi informacion</a></li>
                    </ul>
                </li>

                <li><a href="salir.php">Sesión</a>
                    <ul>
                        <li><a href="salir.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
            </header>
            <br>

    <form action="validarRegistro.php" method="post" >
    <table border="1" style="border-collapse: separate" bordercolor="#5C423C" bgcolor="#94D3C3" width="1300">
        <tr>

            <th>   Nombre del usuario   </th>
            <th>   Tipo de usuario   </th>
            <th>   Tipo de vehículo   </th>
            <th>   Modelo  </th>  
            <th>   Color   </th>
            <th>   Matricula  </th> 
        </tr>
        

        <tr>
            <td><input type="text" placeholder="Ingrese Nombre" name="nombre"></p></td>
            <td><input type="text" placeholder="Ingrese Tipo de usuario" name="Tusuario"></p></td>
            <td><input type="text" placeholder="Ingrese el tipo de vehículo" name="Tvehiculo"></p></td>
            <td><input type="text" placeholder="Ingrese modelo " name="modelo"></p></td>
            <td><input type="text" placeholder="Ingrese color" name="color"></p></td>
            <td><input type="text" placeholder="Ingrese Matricula" name="matricula"></p></td>

        </tr>
        <tr>
            <th>   Fecha   </th>
            <th>   Hora  </th>
            <th>   Lugares Disponibles  </th>
        </tr>
        <tr>
            
            <td><input type="date" placeholder="Ingrese fecha" name="fecha"></p></td>

            <td><input type="time" placeholder="Ingrese hora" name="hora"></p></td>
            <td> <div id="sumar">Sumar</div>
                <div id="restar">Restar</div>
                <div id="total">10</div> </td>

        </tr>
    </table>
<br>

<br>

                <input type="submit" class="btn" name="registrarse" value="registrar"><br>

</form>
<div align="center">
<table  border="1" style="border-collapse: separate" bordercolor="#5C423C" bgcolor="#94D3C3" width="650">

  <tr>
    <td align="center"><img src="./Images/E1.jpg"></td>
    <td align="center"><img src="./Images/E2.jpg"></td>

  </tr>
</table>

</div>

<script type="text/javascript">
    
    let total_element = document.getElementById('total'); // obtenemos el elemento

function sumar () {
  let total_value = parseInt(total_element.innerHTML);
  total_element.innerHTML = total_value + 1;
}


function restar () {
  let total_value = parseInt(total_element.innerHTML);
  if (total_value == 0) return; // validamos que el valor no sea menor a 0
  total_element.innerHTML = total_value - 1;
}

// asignamos funcion click a cada Div
document.getElementById('sumar').addEventListener('click', sumar);

document.getElementById('restar').addEventListener('click', restar)
</script>

</body>

</html>