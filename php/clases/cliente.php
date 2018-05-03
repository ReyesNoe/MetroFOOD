<?php 


class cliente
{
	
	private $idCliente;
	private $idUsuario;
	private $nombre;
	private $estado;
	private $direccion;
	private $fechaCreacion;
	private $fechaModificacion;

	function __construct(argument)
	{
		
	}

	public function getIdCliente(){
	    	return $this->idCliente;
	}
	public function setIdCliente($idCliente){
	    	$this->idCliente = $idCliente;
	}
	public function getIdUsuario(){
	    	return $this->idUsuario;
	}
	public function setIdUsuario($idUsuario){
	    	$this->idUsuario = $idUsuario;
	}
	public function getNombre(){
	    	return $this->nombre;
	}
	public function setNombre($nombre){
	    	$this->nombre = $nombre;
	}
	public function getEstado(){
	    	return $this->estado;
	}
	public function setEstado($estado){
	    	$this->estado = $estado;
	}
	public function getDireccion(){
	    	return $this->direccion;
	}
	public function setDireccion($direccion){
	    	$this->direccion = $direccion;
	}
	public function getFechaCreacion(){
	    	return $this->fechaCreacion;
	}
	public function setFechaCreacion($fechaCreacion){
	    	$this->fechaCreacion = $fechaCreacion;
	}
	public function getFechaModificacion(){
	    	return $this->fechaModificacion;
	}
	public function setFechaModificacion($fechaModificacion){
	    	$this->fechaModificacion = $fechaModificacion;
	}


}

 ?>