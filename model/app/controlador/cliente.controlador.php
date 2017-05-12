<?php 


require_once 'cliente.entidad.php';
require_once 'cliente.modelo.php';

// Logica
$alm = new Cliente();

$model = new ClienteModelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            
            
            //print_r($idCliente);

            $alm->__SET('idCliente',       $_REQUEST['idCliente']);
            $alm->__SET('nombre',          $_REQUEST['nombre']);
            $alm->__SET('ape_paterno',     $_REQUEST['ape_paterno']);
            $alm->__SET('ape_materno',     $_REQUEST['ape_materno']);
            $alm->__SET('calle',           $_REQUEST['calle']);
            $alm->__SET('num',             $_REQUEST['num']);
            $alm->__SET('col',             $_REQUEST['col']);
            $alm->__SET('cp',              $_REQUEST['cp']);
            $alm->__SET('ciudad',          $_REQUEST['ciudad']);
            $alm->__SET('estado',          $_REQUEST['estado']);
            $alm->__SET('tel',             $_REQUEST['tel']);
            $alm->__SET('rfc',             $_REQUEST['rfc']);
            $alm->__SET('tipo_cliente',    $_REQUEST['tipo_cliente']);

            
            $model->Actualizar($alm);
            //header('Location: cliente.interfaz.php');
            break;

        case 'registrar':
            //$alm->__SET('idCliente',       $_REQUEST['idCliente']);
            $alm->__SET('nombre',          $_REQUEST['nombre']);
            $alm->__SET('ape_paterno',     $_REQUEST['ape_paterno']);
            $alm->__SET('ape_materno',     $_REQUEST['ape_materno']);
            $alm->__SET('calle',           $_REQUEST['calle']);
            $alm->__SET('num',             $_REQUEST['num']);
            $alm->__SET('col',             $_REQUEST['col']);
            $alm->__SET('cp',              $_REQUEST['cp']);
            $alm->__SET('ciudad',          $_REQUEST['ciudad']);
            $alm->__SET('estado',          $_REQUEST['estado']);
            $alm->__SET('tel',             $_REQUEST['tel']);
            $alm->__SET('rfc',             $_REQUEST['rfc']);
            $alm->__SET('tipo_cliente',    $_REQUEST['tipo_cliente']);

            $model->Registrar($alm);
            header('Location: cliente.interfaz.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['idCliente']);
            header('Location: cliente.interfaz.php');
            break;

        case 'editar':

            $alm = $model->Obtener($_REQUEST['idCliente']);

            
            break;
    }
}
 ?>