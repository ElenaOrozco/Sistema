<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion del Sistema</title>

     <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">


        <?php include('menu.php');?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- ENCABEZADO DE PAGINA -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Registro de Usuarios
                        </h1>
                    </div>
                </div>

                <?php if(!empty($exito)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <ul>
                                    <?php echo $exito; 
                                    //header('Location:contenido.php');

                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                                            
                <?php endif; ?>
                <!-- /.row -->
			     
                
				<div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            
                            <div class="login-panel panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">Panel de Registro</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Usuario" name="usuario" required autocomplete="off" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Repetir Contraseña" name="password2" type="password" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Privilegio" name="privilegio" type="privilegio" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Id Empleado" name="id_empleado" type="id_empleado" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Id Sucursal" name="id_sucursal" type="id_sucursal" value="">
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                                            </div>
                                            
                                        </fieldset>
                                        <?php if(!empty($errores)): ?>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <ul>
                                                            <?php echo $errores; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br>  <br>  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./js/plugins/morris/raphael.min.js"></script>
    <script src="./js/plugins/morris/morris.min.js"></script>
    <script src="./js/plugins/morris/morris-data.js"></script>

</body>

</html>