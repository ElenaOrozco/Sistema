<?php  session_start();

/*
    if(isset($_SESSION['usuario'])){
    header ('Location: index.php');
}


*/

//nos conectamos a la base de datos

require './class/basededatos.php';
$objData = new Database();



//si hay datos en el formulario
if($_SERVER['REQUEST_METHOD']=='POST'){
	$idarticulo = null;
    $medida = $_POST['medida'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $detalle = $_POST['detalle'];
    $precio_venta = $_POST['precio_venta'];

    $descripcion = " $medida $marca $modelo detalle";
    $errores = '';

    $exito = '';



    
$statament = $objData->prepare('INSERT INTO articulo VALUES (
	:idarticulo,
	:descripcion,
	:precio_venta)');



//$statament->bindParam('nombre_en _bd', $nombre_en_php);

$statament->bindParam(':idarticulo', $idarticulo);
$statament->bindParam(':descripcion', $descripcion);
$statament->bindParam(':precio_venta', $precio_venta);


$statament->execute();

header('Location: articulo_nuevo.php');

 }

require 'views/articulo_nuevo.view.php';
 ?>
