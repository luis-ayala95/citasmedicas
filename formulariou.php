<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="./estilos/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>

	<section>
	<form id="formulario" method="post" action="./registrarusuarios.php">
	
		<label for="nombre">Nombre</label><br>
		<input type="text" id="nombre" name="Nombre" placeholder="Nombre" ><br>

		<label for="apellido">Apellido Paterno</label><br>
		<input type="text" id="apellidoPaterno" name="ApellidoP" placeholder="Apellido" ><br>
        
        <label for="apellido">Apellido materno</label><br>
		<input type="text" id="apellidoPaterno" name="ApellidoM" placeholder="Apellido" ><br>

        <label for="usuario">Domicilio</label><br>
		<input type="text" id="domicilio" name="Domicilio" placeholder="usuario" ><br>

        <label for="usuario">Cuidad</label><br>
		<input type="text" id="ciudad" name="Ciudad" placeholder="usuario" ><br>

        <label for="usuario">Estado</label><br>
		<input type="text" id="estado" name="Estado" placeholder="usuario" ><br>
        
        <label for="usuario">Numero de seguro social</label><br>
		<input type="text" id="Nss" name="NSS" placeholder="usuario" ><br>

		<label for="correo">Correo</label><br>
		<input type="text" id="correo" name="Correo" placeholder="Correo" ><br>

		<label for="password">Password1</label><br>
		<input type="password" id="password1" name="Password1" placeholder="password" ><br>
         
        <label for="password">Password2</label><br>
		<input type="password" id="password2" name="Password2" placeholder="password" ><br>

		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>