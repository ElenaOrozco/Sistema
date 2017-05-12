
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion del Sistema</title>

     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	
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
                        <ol class="breadcrumb">
                            <li class="">
                                <h2>PRODUCTOS</h2>
                            </li>
                        </ol>
                        <hr>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
                
				
				<!-- FORMULARIO PARA BUSCAR PRODUCTOS -->
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" name= "contacto" method ="POST" action="mail.php" id="contacto" onsubmit="return enviar()">
							<div class="row">

								<div class="col-md-12">
									<div class="breadcrumb">
										<div class="form-group">
											<label for="inputMedida" class="col-sm-2 control-label">Producto </label>
										    <div class="col-sm-6">
										      	<input type="text" class="form-control" id="inputMedida" placeholder="Buscar Producto">
										    </div>
										    <button type="submit" class="col-sm-3 btn btn-primary">
										    	<i class="fa fa-search"> </i>
										    	Buscar
										    </button>

										</div>
									</div>
								</div>	
							</div>
						</form> <!-- /.form -->
					</div><!-- /.col -->
				</div> <!-- /.row -->

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
                


				<div class="row">
                   
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-book fa-fw"></i> Productos</h3>
                            </div>

                            <div class="panel-body">
                                <div class="text-right">
                                    <a href="articulo_nuevo.php" class="btn btn-success">
                                        <i class="fa fa-plus fa-2x"></i>
                                        Agregar Nuevo
                                    </a>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Descrpción</th>
                                                <th>Precio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                            foreach ($resultado as $key => $value) {  ?>
                                                <tr>
                                                    <td><?php echo $value['idarticulo']; ?></td>
                                                    <td><?php echo $value['descripcion']; ?></td>
                                                    <td><?php echo $value['precio_venta']; ?></td>
                                                    <td>
                                                        <!--?id=1-->
                                                        <a href="articulo_modificar.php?id=<?php echo $value['idarticulo'];?>" class="btn btn-warning"><i class="fa fa-pencil fa-2x"></i>Modificar</a>
                                                        <a href="eliminar.php?id=<?php echo $value['idarticulo'];?>"class="btn btn-danger">
                                                            <i class="fa fa-trash fa-2x"></i>Eliminar
                                                        </a>
                                                    </td>
                                                    
                                                </tr>

                                                <?php 


                                            
                                            }

                                             ?>
                                            
                                            
                                                
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
