<?php  session_start();

echo "Hola";
//si la sesion esta iniciada
if(isset($_SESSION['usuario'])){
    header ('Location: contenido.php');
//si no tiene sesion
} else{
	echo "No Tienes sesion";
    header ('Location: login.php');
}


 ?>




