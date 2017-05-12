<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Producto</title>

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
                            Registro de Productos
                        </h1>
                    </div>
                </div>

                <!-- Alerta registro exitoso -->
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

                

                <!--columna contenedora del panel -->
                <div class="col-lg-9">     
                    <!--Panel -->
                    <div class="login-panel panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">NUEVO PRODUCTO</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="nuevo_producto">
                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="medida" class="col-sm-2 control-label">Medida:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name= "medida" id="medida" placeholder="Medida">
                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="marca" class="col-sm-2 control-label">Marca: </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="col-sm-3 form-control" name= "marca" id="marca" placeholder="Marca">
                                                </div>
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="modelo" class="col-sm-2 control-label">Modelo: </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="col-sm-3 form-control" name="modelo" id="modelo" placeholder="Modelo">
                                                </div>
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="detalle" class="col-sm-2 control-label">Mas Detalles: </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="col-sm-3 form-control" name= "detalle" id="detalle" placeholder="Más Detalles">
                                                </div>
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="detalle" class="col-sm-2 control-label">Precio Venta: </label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="col-sm-3 form-control" name= "precio_venta" id="detalle" placeholder="Precio Venta">
                                                </div>
                                               
                                            </div>

                                            <div class="col-lg-9 col-lg-offset-2">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-floppy-o"></i>Guardar</button>
                                                    <button type="" class="btn btn-danger">
                                                    <i class="fa fa-times"></i>Cancelar</button>
                                                </div>
                                            </div>


                                        </div>  

                                    </div>
                                </form>
                                <div class="text-right">
                                    <a href="articulo.php">Atras<i class="fa fa-reply fa-2x"></i></a>
                                </div>
                                
                            </div><!--Fin Panel Body-->
                        </div><!--Fin Panel-->

                        <br><br><br><br><br>
                <br><br>
                </div> <!-- ./col Fin Columna del Panel--> 


			     
                

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