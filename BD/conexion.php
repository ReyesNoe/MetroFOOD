<?php 
	
	class Conexion
	
{
	private $host;
	private $user;
	private $password;
	private $database;

	public function __construct()
	{
		
		/*$this->host='localhost';
		$this->user='root';
		$this->password='Itca123!';
		$this->database='metrofooddb';	*/
	}

	public function conectar()
	{
		//$con= new mysqli($this->host, $this->user,$this->password, $this->database);

		$con= new mysqli('localhost', 'root', '' , 'metrofooddb');
		if ($con->connect_errno) {
			echo "Error en la conexion";
			die();
		}
		echo "conectado";
		return $con;
	}
}

 ?>