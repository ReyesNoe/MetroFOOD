<?php 
	
	class productio
	{

		$idProducto;
		$nombreProducto;
		$descripcionProducto;
		$precioProducto;
		$estado;
		$fechaCreacion;
		$fechaModificacion;


		function __construct(argument)
		{
			
		}

		public function getIdProducto(){
		    	return $this->idProducto;
		}
		public function setIdProducto($idProducto){
		    	$this->idProducto = $idProducto;
		}

		public function getNombreProducto(){
		    	return $this->nombreProducto;
		}
		public function setNombreProducto($nombreProducto){
		    	$this->nombreProducto = $nombreProducto;
		}

		public function getDescripcionProducto(){
		    	return $this->descripcionProducto;
		}
		public function setDescripcionProducto($descripcionProducto){
		    	$this->descripcionProducto = $descripcionProducto;
		}

		public function getPrecioProducto(){
		    	return $this->precioProducto;
		}
		public function setPrecioProducto($precioProducto){
		    	$this->precioProducto = $precioProducto;
		}

		public function getEstado(){
		    	return $this->estado;
		}
		public function setEstado($estado){
		    	$this->estado = $estado;
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