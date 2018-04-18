<?php 

	/**
	* 
	*/
	class usuario
	{
		protected $idUsuario;
		protected $usuario;
		protected $pass;
		protected $fechaCreacionUsuario;
		protected $estadoUsuario;
		protected $idTipoEstado;

		function __construct(argument)
		{
			
		}

		public function getIdUsuario(){

			return $this->idUsuario
		}
		public function setIdUsuario($idUsuario){
			$this->idUsuario=$idUsuario;
		}

		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario=$usuario;
		}
		public function getPass(){
			return $this->pass;
		}
		public function setPass($pass){
			$this->pass=$pass;
		}
		public function getFechaCreacionUsuario(){
			return $this->fechaCreacionUsuario;
		}
		public function setFechaCreacionUsuario($fechaCreacionUsuario){
			$this->fechaCreacionUsuario=$fechaCreacionUsuario;
		}
		public function getEstadoUsuario(){
			return $this->estadoUsuario;
		}
		public function setEstadoUsuario($estadoUsuario){
			$this->estadoUsuario=$estadoUsuario;
		}
		public function getIdTipoEstado(){
			return $this->idTipoEstado;
		}
		public function setIdUsuario($idTipoEstado){
			$this->idTipoEstado=$idTipoEstado;
		}
	}
 ?>