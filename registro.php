<?php  session_start();

/*
	if(isset($_SESSION['usuario'])){
	header ('Location: index.php');
}


*/

if($_SERVER['REQUEST_METHOD']=='POST'){

	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$privilegio = $_POST['privilegio'];
	$id_empleado = $_POST['id_empleado'];
	$id_sucursal = $_POST['id_sucursal'];

	//echo "$usuario. $password . $password2 . $privilegio ";

	$errores = '';

	$exito ='';

	if(empty($usuario) or empty($password) or empty($password2)){
		$errores .= '<li> Por favor rellena todos tus datos Correctamente </li>';
	} else{
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
		} catch (PDOException $e) {
			echo "Error" .$e->getMessage();
			
		}

		$statement = $conexion->prepare('SELECT * FROM usuario WHERE user = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();

		//print_r($resultado);
		//var_dump($resultado);

		if ($resultado != false){
			$errores .= '<li> El nombre de usuario ya existe </li>';
		}


		//Hashear la contraseña
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		//echo "$usuario. $password . $password2 . $privilegio ";

		if($password != $password2){
			$errores .= '<li> Las Contraseñas no son iguales</>';
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

		$exito .= '<li> Usuario Creado</>';

		//header ('Location: login.php');
	}
}


require ('views/registro.view.php');

 ?>