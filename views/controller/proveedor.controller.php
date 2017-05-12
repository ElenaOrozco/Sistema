<?php 

require_once 'class/proveedor.class.php';
require_once 'model/proveedores.model.php';

// Logica
$alm = new Proveedor();
$model = new ProveedorModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            
            
            //print_r($idCliente);

            $alm->__SET('idCliente',       $_REQUEST['idProveedor']);
            $alm->__SET('nombre',          $_REQUEST['nombre']);
            $alm->__SET('ape_paterno',     $_REQUEST['direccion']);
            $alm->__SET('ape_materno',     $_REQUEST['tel']);
            $alm->__SET('calle',           $_REQUEST['email']);
            

            
            $model->Actualizar($alm);
            //header('Location: cliente.interfaz.php');
            break;

        case 'registrar':
            $alm->__SET('idCliente',       $_REQUEST['idProveedor']);
            $alm->__SET('nombre',          $_REQUEST['nombre']);
            $alm->__SET('ape_paterno',     $_REQUEST['direccion']);
            $alm->__SET('ape_materno',     $_REQUEST['tel']);
            $alm->__SET('calle',           $_REQUEST['email']);

            $model->Registrar($alm);
            header('Location: ../proveedores.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idProveedor']);
            header('Location: ../proveedores.php');
            break;

        case 'editar':

            $alm = $model->Obtener($_REQUEST['idProveedor']);

            
            break;
    }
}
 ?>