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

		<a href="./formulariou.php" title="Registrarse" id="registrarse" >Registrate</a>
	</header>
	<section>
                 
    <div class="login-page">
        <form method="post" action="./enviarEnfermedad.php">
        <h2>Selecciona la enfermedad que presentas:</h2>
		
        <input type="checkbox" name="checkbox[]" value="Bronquitis" >Bronquitis aguda (resfriado de pecho) Tos, mucosidad<br>

        <input type="checkbox" name="checkbox[]" value="Resfriado" >Resfriado común. Estornudos, moqueo o congestión nasal, dolor de garganta, tos.<br>

		<input type="checkbox" name="checkbox[]" value="InfeccióndeOido" >Infección de oído.( Dolor de oído, fiebre)<br>

        <input type="checkbox" name="checkbox[]" value="Influenza" >  Influenza (gripe)<br>

		<input type="checkbox" name="checkbox[]" value="Sinusitis" >Sinusitis<br>

        <input type="checkbox" name="checkbox[]" value="InfeccionPiel" > Infecciones de la piel<br>
        
		<input type="checkbox" name="checkbox[]" value="Dolorgarganta" >Dolor de garganta.<br>

        <input type="checkbox" name="checkbox[]" value="Infecciónurinaria" > Infección urinaria.<br>

        <input type="checkbox" name="checkbox[]" value="InfecciónEstomacal" >Infección Estomacal<br>

        <input type="checkbox" name="checkbox[]" value="Mareo" > Mareo<br>

        <input type="checkbox" name="checkbox[]" value="COVID-19" > COVID-19<br><br>

    
       <button type="submit" name="aceptar" value="aceptar" >     Siguiente</button>
        <button  name="aceptar1" value="aceptar1" style="margin-left: 10px"><a href="./sintomas.php">No encuentro mi enfermedad</a></button>		
		
		</form>
	
	</section>