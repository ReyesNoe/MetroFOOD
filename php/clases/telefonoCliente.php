<?php 
	
	class telefonoCliente
	{

		private $idTelefonoCliente;
		private $Telefono;
		private $idCliente;
		

		function __construct(){

		}

		public function getIdTelefonoCliente(){
		    	return $this->idTelefonoCliente;
		}
		public function setIdTelefonoCliente($idTelefonoCliente){
		    	$this->idTelefonoCliente = $idTelefonoCliente;
		}
		public function getTelefono(){
		    	return $this->telefono;
		}
		public function setTelefono($telefono){
		    	$this->telefono = $telefono;
		}
		public function getIdCliente(){
		    	return $this->idCliente;
		}
		public function setIdCliente($idCliente){
		    	$this->idCliente = $idCliente;
		}

	}

 ?>