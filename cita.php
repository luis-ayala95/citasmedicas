<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Crear cita</title>
	<link rel="stylesheet" type="text/css" href="./css/crearcita.css">
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
                 
    <div class="login-page">
        <div class="form">
        <h2>Selecciona la enfermedad que presentas:</h2>
		
        <input type="checkbox" id="cbox1" value="first_checkbox"><label>Bronquitis aguda (resfriado de pecho) Tos, mucosidad</label><br>

        <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Resfriado común. Estornudos, moqueo o congestión nasal, dolor de garganta, tos.</label><br>

		<label><input type="checkbox" id="cbox3" value="first_checkbox">Infección de oído.( Dolor de oído, fiebre)</label><br>

        <input type="checkbox" id="cbox4" value="second_checkbox"> <label for="cbox2">  Influenza (gripe)</label><br>

		<label><input type="checkbox" id="cbox5" value="first_checkbox">Sinusitis</label><br>

        <input type="checkbox" id="cbox6" value="second_checkbox"> <label for="cbox2">Infecciones de la piel</label><br>
        
		<label><input type="checkbox" id="cbox7" value="first_checkbox">Dolor de garganta.</label><br>

        <input type="checkbox" id="cbox8" value="second_checkbox"> <label for="cbox2">Infección urinaria.</label><br>

        <label><input type="checkbox" id="cbox9" value="first_checkbox">Infección Estomacal</label><br>

        <input type="checkbox" id="cbox10" value="second_checkbox"> <label for="cbox2">Mareo</label><br>
        <input type="checkbox" id="cbox11" value="second_checkbox"> <label for="cbox2">COVID-19</label><br><br>
        <button type="submit" name="aceptar" value="aceptar" ><a href="./registrou.html">Siguiente</a></button>
        <button type="submit" name="aceptar" value="aceptar" style="margin-left: 10px"><a href="./registrou.html">No encuentro mi enfermedad</a></button>		
		
		</form>
	
	</section>