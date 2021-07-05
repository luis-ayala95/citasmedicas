<?php
session_start();
include "./conexion.php";

<<<<<<< HEAD
	  
			$mysql-> query("INSERT INTO usuario (nombre, apellidoPaterno, apellidoMaterno, domicilio , ciudad, estado, NSS, correo, 
			contraseña) VALUES(
=======
			$mysql-> query("INSERT INTO usuario (nombre, apellidoMaterno, apellidoPaterno,
             domicilio, ciudad, estado, NSS, correo, password) VALUES(
>>>>>>> ec017772d58ec8f66a34fc487fbdf0d2286894ab
				'".$_REQUEST["Nombre"]."',	
				'".$_REQUEST["ApellidoMaterno"]."',
				'".$_REQUEST["ApellidoPaterno"]."',
                '".$_REQUEST["Domicilio"]."',
                '".$_REQUEST["Ciudad"]."',
                '".$_REQUEST["Estado"]."',
                '".$_REQUEST["NSS"]."',
                '".$_REQUEST["Correo"]."',
<<<<<<< HEAD
                ' ".$_REQUEST["Contraseña"]."'
                
=======
                '".$_REQUEST["Password"]."'
>>>>>>> ec017772d58ec8f66a34fc487fbdf0d2286894ab
                )")or die($mysql-> error);
                
	
		header("Location: ./login.php");
	
?>