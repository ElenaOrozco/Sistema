<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Traspasos</title>

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
                        <ol class="breadcrumb text-center">
                            <li class="">
                                <h2>TRASPASOS</h2>
                            </li>
                        </ol>
                        <hr>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
                
				
				<!-- FORMULARIO PARA BUSCAR PRODUCTOS -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<form class="form-horizontal" name= "contacto" method ="POST" action="mail.php" id="contacto" onsubmit="return enviar()">
							<div class="row">

								<div class="col-md-12">
									<div class="breadcrumb">
										<div class="form-group">
											<label for="inputMedida" class="col-sm-2 control-label">Sucursal Destino </label>
										    <div class="col-sm-6">
										      	<input type="text" class="form-control" id="inputMedida" placeholder="Nombre Sucursal">
										    </div>
										    <button type="submit" class="col-sm-3 btn btn-success">
										    	<i class="glyphicon glyphicon-search"> </i>
										    	Buscar
										    </button>
										</div>
									</div>
								</div>	
							</div>
						</form> <!-- /.form -->
					</div><!-- /.col -->
				</div> <!-- /.row -->



				
	
				
				<hr>
				
				<div class="col-lg-10 col-lg-offset-1">
					<form class="form-horizontal" name= "contacto" method ="POST" action="mail.php" id="contacto" onsubmit="return enviar()">
						<div class="row">

							<div class="col-md-12 well">
								<div class="form-group">
									<label for="inputMedida" class="col-sm-2 control-label">Articulo:</label>
								    <div class="col-sm-6">
								      	<input type="text" class="form-control" id="inputMedida" placeholder="Articulo">
								    </div>
								    <button type="submit" class="col-sm-3 btn btn-success">
										    	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										    	Buscar

									</button>

								</div>
								<div class="form-group">
									<label for="inputMedida" class="col-sm-2 control-label">Cantidad:</label>
								    <div class="col-sm-6">
								      	<input type="text" class="form-control" id="inputMedida" placeholder="Cantidad">
								    </div>
								    
								</div>
								
								<div class="col-lg-2 col-lg-offset-2">
									<div class="form-group">
										<button type="submit" class="btn btn-warning btn-block">
										<i class="fa fa-plus"></i>Añadir Otro</button>
									</div>
								</div>
								
								<div class="col-lg-2 col-lg-offset-2">
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">
										<i class="fa fa-floppy-o"></i>Guardar</button>
									</div>
								</div>


							</div>	

						</div>
					</form>
					<br>
					<br>

				</div>  


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
