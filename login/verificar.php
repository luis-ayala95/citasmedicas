<?php
session_start();
include "../conexion.php";
$re=$mysql->query("select * from usuarios where NSS='".$_POST['NSS']."' AND 
 					Password='".$_POST['Password']."'")	or die($mysql-> error);
	
	
		header("Location: ../login.php?error=datos no validos");
	
?>

