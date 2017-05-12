<?php 
require_once '../../../controlador/cliente.entidad.php';
require_once '../../../controlador/cliente.controlador.php';



 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Catalogo Clientes</title>

         <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body >

        <div id="wrapper">

            <?php include('../modules/menu.php');?>

            <div id="page-wrapper">

                <div class="container-fluid">
<!--
                    <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $alm->idCliente > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="idCliente" value="<?php echo $alm->__GET('idCliente'); ?>" />
                    
                    <table >
                        <tr>
                            <th >Nombre</th>
                            <td><input type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Apellido Paterno</th>
                            <td><input type="text" name="ape_paterno" value="<?php echo $alm->__GET('ape_paterno'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Apellido Materno</th>
                            <td><input type="text" name="ape_materno" value="<?php echo $alm->__GET('ape_materno'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th>Calle</th>
                            <td><input type="text" name="calle" value="<?php echo $alm->__GET('calle'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th>Numero</th>
                            <td><input type="text" name="num" value="<?php echo $alm->__GET('num'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th>Colonia</th>
                            <td><input type="text" name="col" value="<?php echo $alm->__GET('col'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th>CP</th>
                            <td><input type="text" name="cp" value="<?php echo $alm->__GET('cp'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Ciudad</th>
                            <td><input type="text" name="ciudad" value="<?php echo $alm->__GET('ciudad'); ?>"  /></td>
                        </tr>
                        
                        <tr>
                            <th >Estado</th>
                            <td><input type="text" name="estado" value="<?php echo $alm->__GET('estado'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >CP</th>
                            <td><input type="text" name="cp" value="<?php echo $alm->__GET('cp'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Telefono</th>
                            <td><input type="text" name="tel" value="<?php echo $alm->__GET('tel'); ?>"  /></td>
                        </tr>
                        
                        <tr>
                            <th >RFC</th>
                            <td><input type="text" name="rfc" value="<?php echo $alm->__GET('rfc'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Tipo de Cliente</th>
                            <td><input type="text" name="tipo_cliente" value="<?php echo $alm->__GET('tipo_cliente'); ?>"  /></td>
                        </tr>
                      
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >Nombre</th>
                            <th >Apellido Pat</th>
                            <th >Apellido Mat</th>
                            <th >Calle</th>
                            <th >Numero</th>
                            <th >Colonia</th>
                            <th >Cp</th>
                            <th >Ciudad</th>
                            <th >Estado</th>
                            <th >Telefono</th>
                            <th >RFC</th>
                            <th >Tipo Cliente</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('idCliente'); ?></td>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('ape_paterno'); ?></td>
                            <td><?php echo $r->__GET('ape_materno'); ?></td>
                            <td><?php echo $r->__GET('calle'); ?></td>
                            <td><?php echo $r->__GET('num'); ?></td>
                            <td><?php echo $r->__GET('col'); ?></td>
                            <td><?php echo $r->__GET('cp'); ?></td>
                            <td><?php echo $r->__GET('ciudad'); ?></td>
                            <td><?php echo $r->__GET('estado'); ?></td>
                            <td><?php echo $r->__GET('tel'); ?></td>
                            <td><?php echo $r->__GET('rfc'); ?></td>
                            <td><?php echo $r->__GET('tipo_cliente'); ?></td>
                            <td>
                                <a href="?action=editar&idCliente=<?php echo $r->idCliente; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&idCliente=<?php echo $r->idCliente; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>-->
                </div> <!-- ./container-fluid -->
            </div> <!-- ./page-wrapper -->
        </div> <!-- ./wrapper -->
        

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/plugins/morris/raphael.min.js"></script>
        <script src="../js/plugins/morris/morris.min.js"></script>
        <script src="../js/plugins/morris/morris-data.js"></script>

    </body>
</html>