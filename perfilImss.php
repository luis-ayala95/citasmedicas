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


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
			
		<a href="./perfil.php" title="Iniciar Sesion" id="iniciosesion" >Mis Citas</a>

		<a href="./crearCita.php" title="Registrarse" id="registrarse" >Crear cita</a>

        <a href="./miInfo.php" title="Registrarse" id="registrarse" >Mi Informacion</a>

        <a href="./ayuda.php" title="Registrarse" id="registrarse" >Ayuda</a>

		<a href="./notificaciones.php" title="notificaciones">
			<img src="./imagenes/carrito.png">
		</a>

	</header>
	

	<section>
		
	<?php
		include 'conexion.php';
		$re=$mysql->query("select * from productos where estado=1")or die($mysql-> error);
		while ($f=$re->fetch_array()) {
        ?>
        <div class="producto">
			<center>

        <?php
        if($f['existencia']!=0){
        ?>
            <div class="contenedor-img">

                <img class= "producto-image" src="./productos/<?php echo $f['imagen'];?>"><br>
                </div>
				<span><?php echo $f['nombre'];?></span><br>
    <?php echo ($f['existencia']>0) ? 'Existencias: '.$f['existencia'] : 'Sin existencias';?><br>
                <a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
        <?php
        }
        else{
            ?>
            <div class="contenedor-img">
            <img class= "producto-image" src="./productos/<?php echo $f['imagen'];?>"><br>
            <?php echo ($f['existencia']>0) ? '' : '<p class="text-img">Agotado</p>';?>
            </div>
            <span><?php echo $f['nombre'];?></span><br>
            <?php echo ($f['existencia']>0) ? 'Existencias: '.$f['existencia'] : 'Sin existencias';?><br>

        <?php     
        }     
        ?>
          
			</center>
		</div>
	<?php
		}
	?>
		
	</section>

	<footer>
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