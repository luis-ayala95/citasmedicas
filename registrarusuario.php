<?php
session_start();
include "./conexion.php";

	  
			$mysql-> query("INSERT INTO usuarios (nombre, apellidoP,apellidoM, domicilo, ciudad , estado, nss, correo, 
			password1,password2) VALUES(
				'".$_REQUEST["Nombre"]."',	
				'".$_REQUEST["ApellidoP"]."',
			    '".$_REQUEST["ApellidoM"]."',
                '".$_REQUEST["Domicilio"]."',
                '".$_REQUEST["Ciudad"]."',
                '".$_REQUEST["Estado"]."',
                '".$_REQUEST["Nss"]."',
                '".$_REQUEST["Correo"]."',
               ' ".$_REQUEST["Password1"]."',
               ' ".$_REQUEST["password2"]."'
                
                )")or die($mysql-> error);
                
	
		header("Location: ./login.php");
	
?>