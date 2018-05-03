<?php 

require_once'verificasionTipoUsuario';

class restaurante
{

	private $idRestaurante;
	private $idUsuario;
	private $nombreRestaurante;
	private $descripcionRestaurante;
	private $estadoRestaurante;
	private $direccionRestaurante;
	private $fechaCreacion;
	private $fechaModificacion;

	function __construct(argument)
	{
		
	}

	public function getIdRestaurante()
	{
	    return $this->IdRestaurante;
	}
	
	public function setIdRestaurante($IdRestaurante)
	{
	    $this->IdRestaurante = $IdRestaurante;
	    
	}

	public function getIdUsuario()
	{
	    return $this->idUsuario;
	}
	
	public function setIdUsuario($IdUsuario)
	{
	    $this->idUsuario = $IdUsuario;
	   
	}

	public function getNombreRestaurante()
	{
	    return $this->nombreRestaurante;
	}
	
	public function setNombreRestaurante($nombreRestaurante)
	{
	    $this->nombreRestaurante = $nombreRestaurante;
	    
	}

	public function getDescripciopnRestaurante()
	{
	    return $this->descripciopnRestaurante;
	}
	
	public function setDescripciopnRestaurante($descripciopnRestaurante)
	{
	    $this->descripciopnRestaurante = $descripciopnRestaurante;
	    
	}

	public function getEstadoRestaurante()
	{
	    return $this->estadoRestaurante;
	}
	
	public function setEstadoRestaurante($estadoRestaurante)
	{
	    $this->estadoRestaurante = $estadoRestaurante;
	    
	}
	public function getDireccionRestaurante()
	{
	    return $this->direccionRestaurante;
	}
	
	public function setDireccionRestaurante($direccionRestaurante)
	{
	    $this->direccionRestaurante = $direccionRestaurante;
	    
	}

	public function getFechaCreacion()
	{
	    return $this->fechaCreacion;
	}
	
	public function setFechaCreacion($fechaCreacion)
	{
	    $this->fechaCreacion = $fechaCreacion;
	    
	}

	public function getFechaModificasion()
	{
	    return $this->fechaModificasion;
	}
	
	public function setFechaModificasion($fechaModificasion)
	{
	    $this->fechaModificasion = $fechaModificasion;
	    
	}

	

}

	


 ?>