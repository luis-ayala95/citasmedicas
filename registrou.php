<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="./estilos/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body background=".\imagenes\citas-medicas.jpg">

	<section>
		<center><h1>REGISTRATE</h1></center>
	<form  id="formulario" method="post" action="./registrarusuario.php">
	
		<label for="nombre">Nombre</label><br>
		<input type="text" id="nombre" name="Nombre" placeholder="Nombre" ><br>

		<label for="apellido">Apellido paterno</label><br>
		<input type="text" id="apellidoP" name="Apellido" placeholder="Apellido Paterno" ><br>

        <label for="apellido">Apellido materno</label><br>
		<input type="text" id="apellidoM" name="Apellido" placeholder="Apellido" ><br>

        <label for="domicilio">Domicilio</label><br>
		<input type="text" id="domicilio" name="Domicilio" placeholder="domicilio" ><br>

		<label for="ciudad">Ciudad</label><br>
		<input type="ciudad" id="ciudad" name="Ciudad" placeholder="ciudad" ><br>

		<label for="estado">Estado</label><br>
		<input type="text" id="estado" name="Estado" placeholder="estado" ><br><br>

        <label for="numero de seguro social">Numero de seguro social</label><br>
		<input type="text" id="seguro" name="Seguro" placeholder="seguro" required><br>

		<label for="email">Correo electronico</label><br>
		<input type="email" id="email" name="Email" placeholder="correo electronico" ><br>

		
		<label for="contraseña">Contraseña</label><br>
		<input type="password" id="contraseña" name="Contraseña" placeholder="contraseña" ><br>

        <label for="contraseña2">ingresa nuevamente tu contraseña</label><br>
		<input type="password" id="contraseña2" name="Contraseña2" placeholder="contraseña" ><br>

		<input type="submit" name="aceptar" value="Aceptar" class="aceptar">
	</form>
	</section>
</body>
</html>