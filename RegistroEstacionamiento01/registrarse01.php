<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
    <link rel="stylesheet" href="../RegistroEstacionamiento01/css/style2.css">
   	<?php require_once "scripts.php"; ?>
    
</head>
<body >
<br>
				<form >
				<h1 class="panel panel-heading">Registro de usuario</h1>

				</form>
				
				<div class="panel panel-body">
					<form id="frmRegistro" align="center">

					<label>Correo</label><br>
					<input type="text" class="form-control input-sm" id="usuario" name="usuario"><br>	

					<label>Nombre</label><br>
					<input type="text" class="form-control input-sm" id="nombre" name="nombre"><br>

					<label>Dirección</label><br>
					<input type="text" class="form-control input-sm" id="direccion" name="direccion"><br>

					<label>telefono</label><br>
					<input type="text" class="form-control input-sm" id="telefono" name="telefono"><br>


					<label>Contraseña</label><br>
					<input type="text" class="form-control input-sm" id="password" name="password"><br>

					

					<p></p>
					<span class="btn btn-primary" id="registrarNuevo" name="registrarse" >Registrar</span><br>
					<br>
						<a href="index.php" class="btn btn-default" align="center " id="boton">Iniciar sesión</a>
					</div></form>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el correo");
				return false;
			}else if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#direccion').val()==""){
				alertify.alert("Debes agregar el direccion");
				return false;

			}else if($('#telefono').val()==""){
				alertify.alert("Debes agregar el telefono");
				return false;

			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() +
					"&nombre=" + $('#nombre').val() +
					"&direccion=" + $('#direccion').val() +
					"&telefono=" + $('#telefono').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>

