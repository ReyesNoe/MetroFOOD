<?php 

class administrador
{
	private $usuario;
	private $contra;

	function __construct()
	{
		
	}

	public function getUsuario()
	{
	    return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
	    $this->usuario = $usuario;
	    return $this;
	}

	public function getContra()
	{
	    return $this->contra;
	}
	
	public function setContra($contra)
	{
	    $this->contra = $contra;
	    return $this;
	}

	public function loginAdmin($usuario,$contra)
		{
			/* verificamos que los datos esten cayendo aqui
			echo "<pre>";
			echo $usuario."<br>";
			echo $contraseña."<br>";
			echo "</pre>";*/

			$user=$usuario;
			$pass=$contra;
			

			$con=$this->conectar();
			$sql = "select usuario, pass from usuario where usuario='".$user."' and pass = '".$pass."';";


			$info= $con->query($sql);
			if ($info->num_rows>0) {
				$data=$info->fetch_assoc();

				session_start();

				$_SESSION['ROLL']=$'admin';
				$_SESSION['USUARIO']=$user;
				
				header("Location: ../Restaurante/dashboardRestaurante.php");
			}else{
				header("Location: ../../index.html");
			}		
		}

}


 ?>