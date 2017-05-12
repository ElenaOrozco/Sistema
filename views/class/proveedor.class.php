<?php 

/**
* 
*/
class Proveedor
{
	private $idProveedor;
	private $nombre;
	private $direccion;
	private $tel;
	private $email;


	public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}






 ?>