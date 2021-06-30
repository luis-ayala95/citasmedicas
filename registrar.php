<?php
session_start();
include "./conexion.php";

	  
			$mysql-> query("INSERT INTO registro (nombre, apellidoPaterno, apellidoMaterno, Domicilio, Ciudad, Estado, NSS, Correo, password) VALUES(
				'".$_REQUEST["Nombre"]."',	
				'".$_REQUEST["apellidoPaterno"]."',
                '".$_REQUEST["apellidoMaterno"]."',
                '".$_REQUEST["Domicilio"]."',
                '".$_REQUEST["Ciudad"]."',
                '".$_REQUEST["Estado"]."',
                '".$_REQUEST["NSS"]."',
                '".$_REQUEST["correo"]."',
                '".$_REQUEST["Password"]."',
                )")or die($mysql-> error);
                
	
		header("Location: ./login.php");
	
?>