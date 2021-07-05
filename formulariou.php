<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>
	
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body background=".\imagenes\citas-medicas.jpg">
	<div class="form">
	<section>
		<center><h1>REGISTRATE</h1></center>
	<form  class="login-form" method="post" action="./registrarusuarios.php">
	
		
		<input type="text" id="nombre" name="Nombre" placeholder="Nombre" ><br>

		<input type="text" id="apellidoMaterno" name="ApellidoMaterno" placeholder="Apellido Paterno" ><br>
 
		<input type="text" id="apellidoPaterno" name="ApellidoPaterno" placeholder="Apellido Materno" ><br>

        <input type="text" id="domicilio" name="Domicilio" placeholder="Domicilio" ><br>

		<input type="ciudad" id="ciudad" name="Ciudad" placeholder="Ciudad" ><br>

		<input type="text" id="estado" name="Estado" placeholder="Estado" ><br>

        <input type="text" id="NSS" name="NSS" placeholder="Numero de Seguro Social" ><br>

		<input type="email" id="correo" name="Correo" placeholder="E-mail" ><br>
		
		<input type="password" id="Password" name="Password" placeholder="Password" ><br>

		<button type="submit" name="aceptar" value="aceptar">Aceptar</button>
	</form>
	</div>
	</section>
</body>
</html>