<?php  session_start();

require './class/basededatos.php';
$objData = new Database();

$statement = $objData->prepare('SELECT * FROM articulo');
$statement->execute();

$resultado = $statement->fetchAll();


require ('views/articulo.view.php');

 ?>