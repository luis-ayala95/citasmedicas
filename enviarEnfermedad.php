<?php
$link=mysqli_connect("localhost","CitasImss","123");
if($link){
	mysqli_select_db($link , "imss");
}

            $checkbox=$_POST['checkbox'];
            foreach ($checkbox as $llave => $valor) { 
             $ficha2="INSERT INTO enfermedad SET nombre='$valor' ";
             $ejecutar_insertar_ficha2=mysqli_query($link, $ficha2);
}
	
   
	
		header("Location: ./login.php");
	
?>

