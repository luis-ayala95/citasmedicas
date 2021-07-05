<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro</title>


	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css"

	
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body background=".\imagenes\citas-medicas.jpg">

<header>
<a href="./login.php" title="Iniciar Sesion" id="iniciosesion" >Iniciar Sesion</a>

		
	</header>

	<div class="form">

	<section>
		<center><h1> escribe tres sintomas que estes presentando</h1></center>
	<form  class="login-form" method="post" action="./registrarSintomas.php">
	
		<input type="text" id="sintoma1" name="sintoma1" placeholder="sintoma1" ><br>

		<input type="text" id="sintoma2" name="sintoma2" placeholder="sintoma2" ><br>
 
		<input type="text" id="sintoma3" name="sintoma3" placeholder="sintoma3" ><br>
        <label>arrastre el punto de acuerdo a que tan urgunte considera su cita</label>
        <input type="range" list="tickmarks">

<datalist id="tickmarks">
  <option value="0" label="0%">
  <option value="10">
  <option value="20">
  <option value="30">
  <option value="40">
  <option value="50" label="50%">
  <option value="60">
  <option value="70">
  <option value="80">
  <option value="90">
  <option value="100" label="100%">
</datalist>
		<button type="submit" name="aceptar" value="aceptar">Aceptar</button>
	</form>
	</div>
	</section>
</body>
</html>