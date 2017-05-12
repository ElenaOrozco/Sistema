<?php  session_start();


//nos conectamos a la base de datos
require 'class/basededatos.php';
$objData = new Database();



	$idarticulo = $_POST['id'];
    $medida = $_POST['medida'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $detalle = $_POST['detalle'];
    $precio_venta = $_POST['precio_venta'];

    $descripcion = " $medida $marca $modelo $detalle"; 
    print_r($descripcion);
    print_r($precio_venta);
    print_r($idarticulo);
 
$sth = $objData->prepare('UPDATE articulo set descripcion = :descripcion, precio_venta = :precio_venta WHERE idarticulo = :idarticulo');
 

 
$sth->bindParam(':idarticulo', $idarticulo);
$sth->bindParam(':descripcion', $descripcion);
$sth->bindParam(':precio_venta', $precio_venta);
 
$sth->execute();
 
header('location: articulo.php');

 ?>