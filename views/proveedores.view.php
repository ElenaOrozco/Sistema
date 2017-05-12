
<?php 

require_once 'class/proveedor.class.php';
require_once 'controller/proveedor.controller.php';


 ?>


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
                                <h2>Proveedores</h2>
                            </li>
                        </ol>
                        <hr>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
                
                
                <!-- ======================================FORMULARIO PARA BUSCAR ================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" name= "buscar" method ="POST" action="buscar_producto.php" id="buscar">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="breadcrumb">
                                        <div class="form-group">
                                            <label for="inputMedida" class="col-sm-2 control-label">Producto </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name= "buscar" id="buscar" placeholder="Buscar Producto">
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
                
               <!-- =============================================== ALERTA ============================================ -->
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
                <!-- =============================================== TABLA ============================================ -->
                <section id="tabla">

                    <div class="row">
                   
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-book fa-fw"></i> Proveedores</h3>
                                </div>

                                <div class="panel-body">
                                    <div class="text-right">
                                        <a href="#nuevo" class="btn btn-info"><i class="fa fa-plus"></i>Agregar nuevo</a>
                                        
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>

                                                    <th >ID</th>
                                                    <th >Nombre</th>
                                                    <th >Direccion</th>
                                                    <th >Telefono</th>
                                                    <th >Email</th>
                                                    <th></th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php foreach($model->Listar() as $r): ?>
                                                    <tr>
                                                        <td><h6><?php echo $r->__GET('idProveedor'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('nombre') ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('direccion'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('tel'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('email'); ?></h6></td>
                                                        <td>
                                                            <a href="?action=editar&idProveedor=<?php echo $r->idProveedor; ?>#nuevo" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar</a>
                                                        </td>
                                                        <td>
                                                            <a href="?action=eliminar&idProveedor=<?php echo $r->idProveedor; ?>#nuevo" class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>Eliminar</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                
                                                    
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->        
                </section>
                


                
                
                
                <!-- ============================================= FORMULARIO ========================================== -->
                <section id="nuevo">
                    <br><br><br>
                    <div class="row">
                   
                        <div class="col-lg-9">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-plus fa-fw"></i>Agregar Proveedor</h3>
                                </div>

                                <div class="panel-body">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="form-horizontal" action="?action=<?php echo $alm->idProveedor > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
                                                <input type="hidden" name="idProveedor" value="<?php echo $alm->__GET('idProveedor'); ?>" />
                                                <div class="row">
                                                    <div class="col-md-12">
                        
                                                        
                                                            <div class="form-group">
                                                                <label for="nombre" class="col-sm-2 control-label">Nombre </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="nombre" placeholder= "Nombre" value="<?php echo $alm->__GET('nombre'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="ape_paterno" class="col-sm-2 control-label">Direccion </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="direccion" placeholder= "Direccion" value="<?php echo $alm->__GET('direccion'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="ape_materno" class="col-sm-2 control-label">Telefono </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="tel" placeholder= "Telefono" value="<?php echo $alm->__GET('tel'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="calle" class="col-sm-2 control-label">Email </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="email" placeholder= "Email" value="<?php echo $alm->__GET('email'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            
                                                            <div class="form-group">
                                                                <div class="col-sm-4 col-sm-offset-7">
                                                                    <a href="#tabla" class="btn btn-default">Atras</a>
                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                    </div>  
                                                </div>
                                            </form> <!-- /.form -->
                                        </div><!-- /.col-lg-12 -->
                                    </div> <!-- /.row Formulario -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row-->
                <!-- /.row -->
                </section>

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



 
                
               
         


