<?php
session_start();
include "../conexion.php";
$re=$mysql->query("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
 					Password='".$_POST['Password']."'")	or die($mysql-> error);
	while ($f=$re->fetch_array()) {
		$id=$f['id'];
		$tipo=$f['tipo'];
	}
	if(isset($id)){
		if($tipo == 1){
			$_SESSION['Usuario']=$id;
		    header("Location: ../index.php");
		}
		
	}else{
		header("Location: ../login.php?error=datos no validos");
	}
?>

