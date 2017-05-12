<?php 

require_once 'cliente.entidad.php';
//Controlador
require_once 'cliente.logico.php';


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
                                <h2>CLIENTES</h2>
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
                                    <h3 class="panel-title"><i class="fa fa-book fa-fw"></i> Clientes</h3>
                                </div>

                                <div class="panel-body">
                                    <div class="text-right">
                                        <a href="#nuevo" class="btn btn-success"><i class="fa fa-plus"></i>Agregar nuevo</a>
                                        
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>

                                                    <th >ID</th>
                                                    <th >Nombre</th>
                                                    <th >Apellidos</th>
                                                    <th >Direccion</th>
                                                    <th >Ciudad</th>
                                                    <th >Estado</th>
                                                    <th >Telefono</th>
                                                    <th >RFC</th>
                                                    <th >Tipo</th>
                                                    <th></th>
                                                    <th></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php foreach($model->Listar() as $r): ?>
                                                    <tr>
                                                        <td><h6><?php echo $r->__GET('idCliente'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('nombre') ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('ape_paterno') . " " . $r->__GET('ape_materno'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('calle') . " " . $r->__GET('num') . " " . $r->__GET('col') . " " . $r->__GET('cp'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('ciudad'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('estado'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('tel'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('rfc'); ?></h6></td>
                                                        <td><h6><?php echo $r->__GET('tipo_cliente'); ?></h6></td>
                                                        <td>
                                                            <a href="?action=editar&idCliente=<?php echo $r->idCliente; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar</a>
                                                        </td>
                                                        <td>
                                                            <a href="?action=eliminar&idCliente=<?php echo $r->idCliente; ?>" class="btn btn-danger" data-toggle = "modal" data-target="#nuevo">
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
                                    <h3 class="panel-title"><i class="fa fa-plus fa-fw"></i>Agregar Cliente</h3>
                                </div>

                                <div class="panel-body">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="form-horizontal" action="?action=<?php echo $alm->idCliente > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
                                                <input type="hidden" name="idCliente" value="<?php echo $alm->__GET('idCliente'); ?>" />
                                                <div class="row">
                                                    <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="nombre" class="col-sm-4 control-label">Nombre </label>
                                                                <label for="nombre" class="col-sm-4 control-label">Apellido </label>
                                                                <label for="nombre" class="col-sm-4 control-label">Apellido </label>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="nombre" placeholder= "Nombre" value="<?php echo $alm->__GET('nombre'); ?>"  />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="nombre" placeholder= "Nombre" value="<?php echo $alm->__GET('nombre'); ?>"  />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control" name="nombre" placeholder= "Nombre" value="<?php echo $alm->__GET('nombre'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        
                                                            <div class="form-group">
                                                                <label for="nombre" class="col-sm-2 control-label">Nombre </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="nombre" placeholder= "Nombre" value="<?php echo $alm->__GET('nombre'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="ape_paterno" class="col-sm-2 control-label">Apellido Paterno </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="ape_paterno" placeholder= "Apellido Paterno" value="<?php echo $alm->__GET('ape_paterno'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="ape_materno" class="col-sm-2 control-label">Apellido Materno </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="ape_materno" placeholder= "Apellido Materno" value="<?php echo $alm->__GET('ape_materno'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="calle" class="col-sm-2 control-label">Calle </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="calle" placeholder= "Nombre" value="<?php echo $alm->__GET('calle'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="num" class="col-sm-2 control-label">Numero </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="num" placeholder= "Numero" value="<?php echo $alm->__GET('num'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="col" class="col-sm-2 control-label">Colonia </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="col" placeholder= "Colonia" value="<?php echo $alm->__GET('col'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="cp" class="col-sm-2 control-label">Cp </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="cp" placeholder= "CP" value="<?php echo $alm->__GET('cp'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="ciudad" class="col-sm-2 control-label">Ciudad </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="ciudad" placeholder= "Ciudad" value="<?php echo $alm->__GET('ciudad'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="estado" class="col-sm-2 control-label">Estado </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="estado" placeholder= "Estado" value="<?php echo $alm->__GET('estado'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="tel" class="col-sm-2 control-label">Telefono </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="tel" placeholder= "Telefono" value="<?php echo $alm->__GET('tel'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="rfc" class="col-sm-2 control-label">RFC </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="rfc" placeholder= "RFC" value="<?php echo $alm->__GET('rfc'); ?>"  />
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="tipo_cliente" class="col-sm-2 control-label">Tipo Cliente </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="tipo_cliente" placeholder= "Tipo Cliente" value="<?php echo $alm->__GET('tipo_cliente'); ?>"  />
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


    <!--=============================================MODAL==================================================== -->
    <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Agregar Cliente</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" action="?action=<?php echo $alm->idCliente > 0 ? 'actualizar' : 'registrar'; ?>" method="post">
                                <input type="hidden" name="idCliente" value="<?php echo $alm->__GET('idCliente'); ?>" />
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                            <div class="form-group">
                                                <label for="nombre" class="col-sm-2 control-label">Nombre </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nombre" placeholder= "Nombre" value="<?php echo $alm->__GET('nombre'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="ape_paterno" class="col-sm-2 control-label">Apellido Paterno </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="ape_paterno" placeholder= "Apellido Paterno" value="<?php echo $alm->__GET('ape_paterno'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="ape_materno" class="col-sm-2 control-label">Apellido Materno </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="ape_materno" placeholder= "Apellido Materno" value="<?php echo $alm->__GET('ape_materno'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="calle" class="col-sm-2 control-label">Calle </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="calle" placeholder= "Nombre" value="<?php echo $alm->__GET('calle'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="num" class="col-sm-2 control-label">Numero </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="num" placeholder= "Numero" value="<?php echo $alm->__GET('num'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="col" class="col-sm-2 control-label">Colonia </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="col" placeholder= "Colonia" value="<?php echo $alm->__GET('col'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="cp" class="col-sm-2 control-label">Cp </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="cp" placeholder= "CP" value="<?php echo $alm->__GET('cp'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="ciudad" class="col-sm-2 control-label">Ciudad </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="ciudad" placeholder= "Ciudad" value="<?php echo $alm->__GET('ciudad'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="estado" class="col-sm-2 control-label">Estado </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="estado" placeholder= "Estado" value="<?php echo $alm->__GET('estado'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="tel" class="col-sm-2 control-label">Telefono </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tel" placeholder= "Telefono" value="<?php echo $alm->__GET('tel'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="rfc" class="col-sm-2 control-label">RFC </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rfc" placeholder= "RFC" value="<?php echo $alm->__GET('rfc'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="tipo_cliente" class="col-sm-2 control-label">Tipo Cliente </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tipo_cliente" placeholder= "Tipo Cliente" value="<?php echo $alm->__GET('tipo_cliente'); ?>"  />
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="col-sm-4 col-sm-offset-7">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div>  
                                </div>
                            </form> <!-- /.form -->
                        </div><!-- /.col -->
                    </div> <!-- /.row Formulario -->
                </div>
            </div>             
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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



 
                
               
         