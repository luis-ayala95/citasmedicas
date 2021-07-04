<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>

	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css"
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

		<label for="apellidoP">Apellido Paterno</label><br>
		<input type="text" id="apellidoPaterno" name="ApellidoP" placeholder="Apellido paterno" required><br>
        
        <label for="apellidoM">Apellido materno</label><br>
		<input type="text" id="apellidoMaterno" name="ApellidoM" placeholder="Apellido materno"required ><br>

        <label for="domicilio">Domicilio</label><br>
		<input type="text" id="domicilio" name="Domicilio" placeholder="domicilio" ><br>

        <label for="ciudad">Ciudad</label><br>
		<input type="text" id="ciudad" name="Ciudad" placeholder="ciudad" ><br>

        <label for="estado">Estado</label><br>
		<input type="text" id="estado" name="Estado" placeholder="estado" ><br>
        
        <label for="nss">Numero de seguro social</label><br>
		<input type="text" id="Nss" name="NSS" placeholder="Numero de seguro" required><br>

		<label for="correo">Correo</label><br>
		<input type="email" id="correo" name="Correo" placeholder="Correo" required><br>

		<label for="password">Password</label><br>
		<input type="password" id="password" name="Contraseña" placeholder="contraseña" required ><br>
        

		<button id="registro" type="submit" name="aceptar" value="aceptar">Registrar</button>
	</form>
	</section>
</body>
</html>