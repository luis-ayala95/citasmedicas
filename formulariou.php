<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="./estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body background=".\imagenes\citas-medicas.jpg">
<header>
<a href="./login.php" title="Iniciar Sesion" id="iniciosesion" >Iniciar Sesion</a>

		<a href="./registrou.html" title="Registrarse" id="registrarse" >Registrate</a>
	</header>
	<section>
	<form id="formulario" method="post" action="./registrarusuarios.php">
	
		<label for="nombre">Nombre</label><br>
		<input type="text" id="nombre" name="Nombre" placeholder="Nombre" required><br>

		<label for="apellido">Apellido Paterno</label><br>
		<input type="text" id="apellidoPaterno" name="ApellidoP" placeholder="Apellido" required><br>
        
        <label for="apellido">Apellido materno</label><br>
		<input type="text" id="apellidoPaterno" name="ApellidoM" placeholder="Apellido"required ><br>

        <label for="usuario">Domicilio</label><br>
		<input type="text" id="domicilio" name="Domicilio" placeholder="usuario" ><br>

        <label for="usuario">Cuidad</label><br>
		<input type="text" id="ciudad" name="Ciudad" placeholder="usuario" ><br>

        <label for="usuario">Estado</label><br>
		<input type="text" id="estado" name="Estado" placeholder="usuario" ><br>
        
        <label for="usuario">Numero de seguro social</label><br>
		<input type="text" id="Nss" name="NSS" placeholder="usuario" required><br>

		<label for="correo">Correo</label><br>
		<input type="text" id="correo" name="Correo" placeholder="Correo" required><br>

		<label for="password">Password1</label><br>
		<input type="password" id="password1" name="Password1" placeholder="password" required ><br>
        

		<button id="registro" type="submit" name="aceptar" value="aceptar">Registrar</button>
	</form>
	</section>
</body>
</html>