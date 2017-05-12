<?php 

/**
* 
*/
class Cliente
{
	private $idCliente;
	private $nombre;
	private $ape_paterno;
	private $ape_materno;
	private $calle;
	private $num;
	private $col;
	private $cp;
	private $ciudad;
	private $estado;
	private $tel;
	private $rfc;
	private $tipo_cliente;


	public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}






 ?>