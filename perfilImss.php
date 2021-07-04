<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">
	<link rel="stylesheet" type="text/css" href="./css/producto.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" type="text/css" href="./css/redes_sociales.css">
    <link rel="stylesheet" type="text/css" href="./css/icons.css"/>
    <link rel="stylesheet" type="text/css" href="./css/agotado.css"/>
    <link rel="stylesheet" type="text/css" href="./css/perfil.css"/>
      <link rel="stylesheet" type="text/css" href="./css/encabezado.css"/>
       <link rel="stylesheet" type="text/css" href="agotado./colorPiedePagina.css"/>

    <link rel="stylesheet" type="text/css" href="./css/estilofondo.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<<<<<<< HEAD
<body class="fondo">
	<header class="encabezado"> 
    <a href="./notificaciones.php" title="notificaciones">
			<img src="./imagenes/carrito.png">
=======
<body >
	<header>
    <a href="./notificaciones.php" title="notificaciones" id="notificaciones">
			<img src="notificaciones.png">
>>>>>>> master
		</a>	
		<a href="./ayuda.php" title="Ayuda" id="ayuda" >Ayuda</a>
        <a href="./miInfo.php" title="Mi info" id="info" >Mi Informacion</a>
        <a href="./elegirEnfermedad.php" title="Crear Cita" id="crearCita" >Crear cita</a>
        <a href="./perfilImss.php" title="Mis citas" id="MisCitas" >Mis Citas</a>

		

        

        

		

	</header>
	

	<section>
    <div >
			
            <div class="citas">
	<?php
		include 'conexion.php';
		$re=$mysql->query("select idCita,enfermedad, fecha,hora,c.idUsuario, activo, u.nombre, s.direccion from citas c
        join usuario u on u.idUsuario=c.idUsuario
        join sucursal s on c.idsucursal= s.idsucursal where activo=1 and c.idUsuario=1")or die($mysql-> error);
        ?>
        <div> <h1>Citas actuales para:<?php echo "Nombre" ?> </h1>
    <?php
    
		while ($f=$re->fetch_array()) {
        ?>
        
            <?php
        if($f['activo']==1){
        ?>
        
            <div class="contenedor-cita">
            
            <span><?php echo "Cita agendada para el dia: ". $f['fecha'];?></span><br>
            <span><?php echo "A las: ".$f['hora'];?></span><br>
            <span><?php echo "Por la enfermed de: ". $f['enfermedad'];?></span><br>
            <span><?php echo "En el imms con direccion: ". $f['direccion'];?></span><br>

            <a href="./cancelar.php?idCita=<?php  echo $f['idCita'];?>">Cancelar cita</a>
                </div>
				
                
        <?php
        }

    }
            ?>

        </div>	
		</div>

		   <div >
                   <h1>¿Quieres crear una cita? Has clic en crear cita</h1>
                   <a href="elegirEnfermedad.php">Crear cita</a>
           
                
                
                </div> 
            
	</section>

	<footer class="pieDePagina">
            <div class="columna">
                <div class="fila">
                    <div class="columna">
                        <h5>
                            Información
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="somos.html">
                                        Sobre nosotros
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="columna">
                        <h5>
                            Legal
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                     <a href="terms-and-conditions-of-use.html">
                                        Términos y condiciones de uso
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        Política de privacidad
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        Información de Copyright
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="columna">
                        <h5>
                           AYUDA!
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="ayuda.html">
                                        Soporte
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                      CONTACTANOS
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="columna">
                        <h5>
                            Equipo
                        </h5>
                        <div class="lista1">
                            <ul>
                                <li>
                                    <a href="#!">
                                        Leslie Aylin Sanchez Ramirez
                                    </a>
                                    <a href="#!">
                                        Rosita Escobar Figueroa
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="fila">
                    <h6>
                        © 2021, IMSS. Copyright.
                    </h6>
                </div>
            </div>
        </footer>




</body>
</html>