<?php 

class repartidor
{
	$idRepartidor;
	$idUsuario;
	$nombreRepartidor;
	$direccionRepartidor;
	$estadoDelRepartidor;
	$fechaCreacion;
	$fechaModificasion


	function __construct(argument)
	{
		
	}
	public function getIdRepartidor(){
	    	return $this->idRepartidor;
	}
	public function setIdRepartidor($idRepartidor){
	    	$this->idRepartidor = $idRepartidor;
	}
	public function getIdUsario(){
	    	return $this->idUsario;
	}
	public function setIdUsario($idUsario){
	    	$this->idUsario = $idUsario;
	}
	public function getNombreRepartidor(){
	    	return $this->nombreRepartidor;
	}
	public function setNombreRepartidor($nombreRepartidor){
	    	$this->nombreRepartidor = $nombreRepartidor;
	}
	public function getDireccionRepartidor(){
	    	return $this->direccionRepartidor;
	}
	public function setDireccionRepartidor($direccionRepartidor){
	    	$this->direccionRepartidor = $direccionRepartidor;
	}
	public function getEstadoRepartidor(){
	    	return $this->estadoRepartidor;
	}
	public function setEstadoRepartidor($estadoRepartidor){
	    	$this->estadoRepartidor = $estadoRepartidor;
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

	public function loginRepartidor($usuario,$contra)
		{
			/* verificamos que los datos esten cayendo aqui
			echo "<pre>";
			echo $usuario."<br>";
			echo $contraseña."<br>";
			echo "</pre>";*/

			

			$con=$this->conectar();
			$sql = "select usuario, pass from usuario where usuario='".$user."' and pass = '".$pass."';";


			$info= $con->query($sql);
			if ($info->num_rows>0) {
				$data=$info->fetch_assoc();

				session_start();

				$_SESSION['USUARIO']=$data['usuario'];
				header("Location: ../Restaurante/dashboardRestaurante.php");
			}else{
				header("Location: ../../index.html");
			}		
		}
	

}


 ?>