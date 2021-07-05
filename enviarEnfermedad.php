<?php
<<<<<<< HEAD
$link=mysqli_connect("localhost","root","");
if($link){
	mysqli_select_db($link , "Imss");
=======
$link=mysqli_connect("localhost","CitasImss","123");
if($link){
	mysqli_select_db($link , "imss");
>>>>>>> 94f66e1e9e8f6fb302bad7e436e5e20adb0c4816
}

            $checkbox=$_POST['checkbox'];
            foreach ($checkbox as $llave => $valor) { 
<<<<<<< HEAD
             $ficha2="INSERT INTO citas SET enfermedad='$valor' ";
             $ejecutar_insertar_ficha2=mysqli_query($link, $ficha2);
}
	

	
?>
=======
             $ficha2="INSERT INTO enfermedad SET nombre='$valor' ";
             $ejecutar_insertar_ficha2=mysqli_query($link, $ficha2);
}
	
   
	
		header("Location: ./login.php");
	
?>

>>>>>>> 94f66e1e9e8f6fb302bad7e436e5e20adb0c4816
