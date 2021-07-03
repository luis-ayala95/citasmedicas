<?php
session_start();
include "../conexion.php";
$re=$mysql->query("select * from usuario where NSS='".$_POST['NSS']."' AND 
 					Password='".$_POST['Password']."'")	or die($mysql-> error);
	
	
					 while($f = $re->fetch_array()){
						$arreglo[] = array ('NSS'=>$f['NSS'],
							'Password'=>$f['Password'],
							);
					}
					if (isset($arreglo)) {
						$_SESSION['NSS'] = $arreglo;
						header("Location: ../formulariou.php");
					} else{
						header("Location: ../login.php?error=datosinvalidos");
					}
	
?>

