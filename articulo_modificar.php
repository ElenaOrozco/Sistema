<?php  session_start();


//nos conectamos a la base de datos
require 'class/basededatos.php';
$objData = new Database();

$errores = '';

$exito = '';
    
$statament = $objData->prepare('SELECT * FROM articulo WHERE idarticulo = :idarticulo');

$idarticulo =$_GET['id'];


//$statament->bindParam('nombre_en _bd', $nombre_en_php);
$statament->bindParam(':idarticulo', $idarticulo);

$statament->execute();

//header('Location: articulo_nuevo.php');

$resultado = $statament->fetchAll(); 

print_r($resultado);

require 'views/articulo_modificar.view.php';
 ?>
