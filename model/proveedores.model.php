<?php 


/**
* SET -> traer de la BD
* GET -> Formulario
*/
class ProveedorModelo
{
	private $pdo;
	
	function __construct()
	{
		try {
			$this->pdo = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
            echo "Nose connecto";
			die($e->getMessage());
		}
	}


	public function Listar()
    {
        
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM proveedor");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Proveedor();

                $alm->__SET('idProveedor', $r->idProveedor);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('direccion', $r->direccion);
                $alm->__SET('tel', $r->tel);
                $alm->__SET('email', $r->email);
                

                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($idProveedor)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM proveedor WHERE idProveedor = ?");
                      

            $stm->execute(array($idProveedor));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Proveedor();

                $alm->__SET('idProveedor', $r->idProveedor);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('direccion', $r->direccion);
                $alm->__SET('tel', $r->tel);
                $alm->__SET('email', $r->email);
            //print_r($alm);
            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($idProveedor)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM proveedor WHERE idProveedor = ?");                      

            $stm->execute(array($idProveedor));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Proveedor $data)
    {
    	print_r($data);
        try 
        {
            $sql = "UPDATE proveedor SET 
                        nombre          = ?, 
                        direccion       = ?,
                        tel             = ?, 
                        email           = ?   
                    WHERE idCliente = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                	
                    $data->__GET('nombre'), 
                    $data->__GET('direccion'), 
                    $data->__GET('tel'),
                    $data->__GET('email')
                    )
                );
        } catch (Exception $e) 
        {
        	echo "No se pudo meter sql";
            die($e->getMessage());

        }
    }

    public function Registrar(Proveedor $data)
    {
    	//$idCliente= null;
        try 
        {
            /*
        $sql = "INSERT INTO proveedor (idProveedor, nombre, direccion, tel, email) 
                VALUES (?, ?, ?, ?, ?)";

                print_r($sql);

        $this->pdo->prepare($sql)
             ->execute(
            array(
            		$data->__GET('idProveedor'),
                	$data->__GET('nombre'), 
                    $data->__GET('direccion'), 
                    $data->__GET('tel'),
                    $data->__GET('email'),
                    
                )
            );
            */
        $sql = "CALL insertar_proveedor(?, ?, ?, ?, ?)";
        $this->pdo->prepare($sql)
             ->execute(
            array(
                    $data->__GET('idProveedor'),
                    $data->__GET('nombre'), 
                    $data->__GET('direccion'), 
                    $data->__GET('tel'),
                    $data->__GET('email'),
                    
                )
            );



        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

}






 ?>