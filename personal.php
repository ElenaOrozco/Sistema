<?php  session_start();

require './class/basededatos.php';
$objData = new Database();

$statement = $objData->prepare('SELECT * FROM empleado');
$statement->execute();

$resultado = $statement->fetchAll();


require ('views/personal.view.php');

 ?>