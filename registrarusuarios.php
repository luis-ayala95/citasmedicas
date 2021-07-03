<?php
session_start();
include "./conexion.php";

	  
			$mysql-> query("INSERT INTO registro (nombre, apellidoPaterno, apellidoMaterno, Domicilio, Ciudad, Estado, NSS, correo, password1) VALUES(
				'".$_REQUEST["Nombre"]."',	
				'".$_REQUEST["ApellidoP"]."',
				'".$_REQUEST["ApellidoM"]."',
                '".$_REQUEST["Domicilio"]."',
                '".$_REQUEST["Ciudad"]."',
                '".$_REQUEST["Estado"]."',
                '".$_REQUEST["NSS"]."',
                '".$_REQUEST["Correo"]."',
                '".$_REQUEST["Password1"]."'
                
                )")or die($mysql-> error);
                
	
		header("Location: ./login.php");
	
?>