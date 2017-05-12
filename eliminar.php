<?php  session_start();


//nos conectamos a la base de datos
require 'class/basededatos.php';
$objData = new Database();



	$idarticulo = $_GET['id'];
    
 $exito='';  
 $errores='';
 
$sth = $objData->prepare('DELETE FROM articulo WHERE idarticulo = :idarticulo');
 

 
$sth->bindParam(':idarticulo', $idarticulo);

$sth->execute();

$exito .= '<i class="fa fa-info-circle"></i> <strong>El Producto ha sido modificado Correctamente</strong>';
 
header('location: articulo.php');

 ?>