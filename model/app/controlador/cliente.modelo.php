<?php 


/**
* SET -> traer de la BD
* GET -> Formulario
*/
class ClienteModelo
{
	private $pdo;
	
	function __construct()
	{
		try {
			$this->pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM cliente");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Cliente();

                $alm->__SET('idCliente', $r->idCliente);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('ape_paterno', $r->ape_paterno);
                $alm->__SET('ape_materno', $r->ape_materno);
                $alm->__SET('calle', $r->calle);
                $alm->__SET('num', $r->num);
                $alm->__SET('col', $r->col);
                $alm->__SET('cp', $r->cp);
                $alm->__SET('ciudad', $r->ciudad);
                $alm->__SET('estado', $r->estado);
                $alm->__SET('tel', $r->tel);
                $alm->__SET('rfc', $r->rfc);
                $alm->__SET('tipo_cliente', $r->tipo_cliente);
               

                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($idCliente)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM cliente WHERE idCliente = ?");
                      

            $stm->execute(array($idCliente));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Cliente();

            $alm->__SET('idCliente', $r->idCliente);
            $alm->__SET('nombre', $r->nombre);
            $alm->__SET('ape_paterno', $r->ape_paterno);
            $alm->__SET('ape_materno', $r->ape_materno);
            $alm->__SET('calle', $r->calle);
            $alm->__SET('num', $r->num);
            $alm->__SET('col', $r->col);
            $alm->__SET('cp', $r->cp);
            $alm->__SET('ciudad', $r->ciudad);
            $alm->__SET('estado', $r->estado);
            $alm->__SET('tel', $r->tel);
            $alm->__SET('rfc', $r->rfc);
            $alm->__SET('tipo_cliente', $r->tipo_cliente);
            //print_r($alm);
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($idCliente)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM cliente WHERE idCliente = ?");                      

            $stm->execute(array($idCliente));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Cliente $data)
    {
    	print_r($data);
        try 
        {
            $sql = "UPDATE cliente SET 
                        nombre          = ?, 
                        ape_paterno     = ?,
                        ape_materno     = ?, 
                        calle           = ?,
                        num             = ?, 
                        col             = ?,
                        cp              = ?, 
                        ciudad          = ?,
                        estado          = ?, 
                        tel             = ?,
                        rfc             = ?, 
                        tipo_cliente    = ?
                    WHERE idCliente = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                	
                    $data->__GET('nombre'), 
                    $data->__GET('ape_paterno'), 
                    $data->__GET('ape_materno'),
                    $data->__GET('calle'),
                    $data->__GET('num'),
                    $data->__GET('col'), 
                    $data->__GET('cp'), 
                    $data->__GET('ciudad'),
                    $data->__GET('estado'),
                    $data->__GET('tel'),
                    $data->__GET('rfc'), 
                    $data->__GET('tipo_cliente'),
                    $data->__GET('idCliente')
                    )
                );
        } catch (Exception $e) 
        {
        	echo "No se pudo meter sql";
            die($e->getMessage());

        }
    }

    public function Registrar(Cliente $data)
    {
    	//$idCliente= null;
        try 
        {
        $sql = "INSERT INTO cliente (idCliente,nombre,ape_paterno,ape_materno,calle, num, col, cp, ciudad, estado, tel, rfc, tipo_cliente) 
                VALUES (?, ?, ?, ?, ?,?,?,?,?,?,?,?,?)";

                print_r($sql);

        $this->pdo->prepare($sql)
             ->execute(
            array(
            		$data->__GET('idCliente'),
                	$data->__GET('nombre'), 
                    $data->__GET('ape_paterno'), 
                    $data->__GET('ape_materno'),
                    $data->__GET('calle'),
                    $data->__GET('num'),
                    $data->__GET('col'), 
                    $data->__GET('cp'), 
                    $data->__GET('ciudad'),
                    $data->__GET('estado'),
                    $data->__GET('tel'),
                    $data->__GET('rfc'), 
                    $data->__GET('tipo_cliente')
                )
            );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

}






 ?>