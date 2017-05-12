<?php  session_start();

$errores='';

//1. si se envian los datos correctamente
if($_SERVER['REQUEST_METHOD']=='POST'){
	//2. recupero los campos
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	//echo "$usuario - $password";

	//3. hago la conexion
	try {
             
		$conexion = new PDO('mysql:host=localhost;dbname=mydb','root','');
	} catch (PDOException $e) {
		echo "Error: " .$e->getMessage();
		
	}

	//4. Preparar la consulta Buscar usuario y contraseña 
	$statement = $conexion->prepare('SELECT * FROM usuario	WHERE user = :usuario AND pass = :password');

	//5. Ejecutar consulta
	$statement->execute(array(
		':usuario'=>$usuario,
		':password'=>$password));


	$resultado = $statement->fetch();
	//var_dump($resultado);

	//6. Capturar posibles errores ->si hayo el usuario
	if($resultado != false){
		$_SESSION['usuario']= $usuario;		
		header('Location: contenido.php');

	}else{
		$errores.='<li>Usuario o contraseña invalida</li>';
	}

}

require ('views/login.view.php')


 ?>