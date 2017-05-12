
<?php 
//nos conectamos a la BD
/* 
require'class/basededatos.php';
$objData = new Database();



	$idarticulo = $_POST['id'];
    $medida = $_POST['medida'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $detalle = $_POST['detalle'];
    $precio_venta = $_POST['precio_venta'];

    $descripcion = " $medida $marca $modelo detalle"; 
//print_r($_POST);
 
$sth = $objData--->prepare('UPDATE articulo set descripcion = :descripcion, precio_venta = :precio_venta WHERE idarticulo = :idarticulo');
 

 
$sth->bindParam(':idarticulo', $idarticulo);
$sth->bindParam(':descripcion', $descripcion);
$sth->bindParam(':precio_venta', $precio_venta);
 
$sth->execute();
 
//header('location: articulo.php');

 ?>
 <?php  /*/session_start();

/*
    if(isset($_SESSION['usuario'])){
    header ('Location: index.php');
}


*/

if($_SERVER['REQUEST_METHOD']=='POST'){

    $idarticulo = $_POST['id'];
    $medida = $_POST['medida'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $detalle = $_POST['detalle'];
    $precio_venta = $_POST['precio_venta'];

    $descripcion = " $medida $marca $modelo detalle";

    //echo "$usuario. $password . $password2 . $privilegio ";

    $errores = '';

    $exito ='';

    if(empty($medida) or empty($marca) or empty($modelo)  or empty($detalle)  or empty($precio_venta)){
        $errores .= '<li> Por favor rellena todos tus datos Correctamente </li>';
    } else{
        

        $sth = $objData--->prepare('UPDATE articulo set descripcion = :descripcion, precio_venta = :precio_venta WHERE idarticulo = :idarticulo');
 

 
		$sth->bindParam(':idarticulo', $idarticulo);
		$sth->bindParam(':descripcion', $descripcion);
		$sth->bindParam(':precio_venta', $precio_venta);
		 
		$sth->execute();
 

        print_r($stch);
        //var_dump($resultado);

        if ($sth->execute();){
            $errores .= '<li> El nombre de usuario ya existe </li>';
        }


    }

    if ($errores ==''){
        //echo 'INSERT INTO usuario (idUsuario, user, pass, privilegio, Empleado_idEmpleado, Empleado_Sucursal_idSucursal) VALUES(null, :usuario, :password, :privilegio, :id_empleado. :id_sucursal)';
        $statement= $conexion->prepare('INSERT INTO usuario (idUsuario, user, pass, privilegio, Empleado_idEmpleado, Empleado_Sucursal_idSucursal) VALUES(null, :user, :pass, :privilegio, :Empleado_idEmpleado, :Empleado_Sucursal_idSucursal)');
        $statement->execute(array(
            ':user'=> $usuario, 
            ':pass'=>$password, 
            ':privilegio'=>$privilegio, 
            ':Empleado_idEmpleado'=>$id_empleado, 
            ':Empleado_Sucursal_idSucursal'=>$id_sucursal
            ));

        $exito .= '<i class="fa fa-info-circle"></i> <strong>El Usuario ha sido Creado Correctamente</strong>';

        //header ('Location: login.php');
    }
}


require ('views/registrar.view.php');

 ?>