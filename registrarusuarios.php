<?php
session_start();
include "./conexion.php";

	  
			$mysql-> query("INSERT INTO usuario (nombre, apellidoPaterno, apellidoMaterno, domicilio , ciudad, estado, NSS, correo, 
			contraseña) VALUES(
				'".$_REQUEST["Nombre"]."',	
				'".$_REQUEST["ApellidoP"]."',
				'".$_REQUEST["ApellidoM"]."',
                '".$_REQUEST["Domicilio"]."',
                '".$_REQUEST["Ciudad"]."',
                '".$_REQUEST["Estado"]."',
                '".$_REQUEST["NSS"]."',
                '".$_REQUEST["Correo"]."',
                ' ".$_REQUEST["Contraseña"]."'
                
                )")or die($mysql-> error);
                
	
		header("Location: ./login.php");
	
?>