<?php 

	require_once'../model/usuario.php';
	if (isset($_POST['login'])) {
		login();
	}

	 function login(){

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$ObjUsuario = new Usuario();
		$ObjUsuario->logear($user,$pass);

	};
 ?>