<?php 

	class Usuario extends Conexion
	{
		protected $idUsuario;
		protected $usuario;
		protected $pass;
		protected $fechaCreacionUsuario;
		protected $estadoUsuario;
		protected $idTipoEstado;

		function __construct()
		{
			parent::__construct();
		}

		public function getIdUsuario(){

			return $this->idUsuario;
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
		public function setIdTipoEstado($idTipoEstado){
			$this->idTipoEstado=$idTipoEstado;
		}

		public function encriptar($var){
			$newPass = sha1(123);

			echo $newPass;
			return $newPass;
		}

		public function logear($user, $pass){
			$con = $this.conectar;
			die();
			$sql = "select usuario as usuario, idTipoUsuario as rol from usuario where usuario = '".$user."' && pass='".$pass."' && estadoUsuario ='1'";
			$info =$con->qwery($sql);
			if ($info>$con->num_rows()) {

				$data = $info->fetch_assoc;

			}

		}

	}
 ?>